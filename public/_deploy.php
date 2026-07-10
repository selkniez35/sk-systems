<?php

declare(strict_types=1);

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;

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

require dirname(__DIR__) . '/vendor/autoload.php';

/**
 * Token de déploiement.
 * Le même doit être enregistré dans le secret GitHub DEPLOY_TOKEN.
 */
$expectedToken = 'sdfsfg4392804JGZ498TGFjfhuizsoeç_uçII4';

$token = $_GET['token'] ?? '';

if (!hash_equals($expectedToken, $token)) {
    respond(403, 'Forbidden');
}

try {

    // Reset OPCache (OVH)
    $opcacheReset = false;

    if (function_exists('opcache_reset')) {
        $opcacheReset = opcache_reset();
    }

    $kernel = new \App\Kernel('prod', false);

    $application = new Application($kernel);
    $application->setAutoExit(false);

    /*
     * Cache Clear
     */
    $output = new BufferedOutput();

    $exitCodeClear = $application->run(
        new ArrayInput([
            'command' => 'cache:clear',
            '--env' => 'prod',
            '--no-warmup' => true,
        ]),
        $output
    );

    $clearLog = $output->fetch();

    /*
     * Cache Warmup
     */
    $output = new BufferedOutput();

    $exitCodeWarmup = $application->run(
        new ArrayInput([
            'command' => 'cache:warmup',
            '--env' => 'prod',
        ]),
        $output
    );

    $warmupLog = $output->fetch();

    respond(200, 'Deployment completed successfully.', [
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

    respond(500, 'Deployment failed.', [
        'exception' => $e->getMessage(),
        'file' => $e->getFile(),
        'line' => $e->getLine(),
    ]);

}
