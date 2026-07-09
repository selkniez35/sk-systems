<?php

declare(strict_types=1);

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;

// Désactiver l'affichage des erreurs pour ne pas polluer la sortie JSON en cas de warning
error_reporting(0);
ini_set('display_errors', '0');

header('Content-Type: application/json');

function respond(int $code, string $message, array $details = []): void
{
    http_response_code($code);
    echo json_encode([
        'status' => $code === 200 ? 'success' : 'error',
        'message' => $message,
        'details' => $details,
        'php_version' => PHP_VERSION,
        'sapi' => PHP_SAPI,
    ]);
    exit;
}

require dirname(__DIR__).'/vendor/autoload.php';

$token = $_GET['token'] ?? '';
$envToken = $_ENV['DEPLOY_TOKEN'] ?? $_SERVER['DEPLOY_TOKEN'] ?? null;

// Si le token n'est pas trouvé dans ENV/SERVER, on essaie de charger .env.local manuellement
// car en mode CGI/FastCGI sur OVH, les variables d'environnement peuvent être capricieuses
if (empty($envToken) && file_exists(dirname(__DIR__).'/.env.local')) {
    $lines = file(dirname(__DIR__).'/.env.local', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (str_starts_with(trim($line), '#')) continue;
        if (str_contains($line, '=')) {
            [$name, $value] = explode('=', $line, 2);
            if (trim($name) === 'DEPLOY_TOKEN') {
                $envToken = trim($value);
                break;
            }
        }
    }
}

if (empty($envToken) || $token !== $envToken) {
    respond(403, 'Forbidden: Token mismatch or not set.');
}

try {
    // Reset OPcache if available (crucial for OVH)
    $opcacheReset = false;
    if (function_exists('opcache_reset')) {
        $opcacheReset = opcache_reset();
    }

    $kernel = new \App\Kernel('prod', false);
    $application = new Application($kernel);
    $application->setAutoExit(false);

    $output = new BufferedOutput();

    // Cache Clear
    $exitCodeClear = $application->run(new ArrayInput([
        'command' => 'cache:clear',
        '--env' => 'prod',
        '--no-warmup' => true,
    ]), $output);
    $clearLog = $output->fetch();

    // Cache Warmup
    $exitCodeWarmup = $application->run(new ArrayInput([
        'command' => 'cache:warmup',
        '--env' => 'prod',
    ]), $output);
    $warmupLog = $output->fetch();

    respond(200, 'Deployment tasks completed.', [
        'opcache_reset' => $opcacheReset,
        'cache_clear' => [
            'exit_code' => $exitCodeClear,
            'log' => $clearLog,
        ],
        'cache_warmup' => [
            'exit_code' => $exitCodeWarmup,
            'log' => $warmupLog,
        ],
    ]);
} catch (\Throwable $e) {
    respond(500, 'Internal Server Error', [
        'exception' => $e->getMessage(),
        'file' => $e->getFile(),
        'line' => $e->getLine(),
    ]);
}
