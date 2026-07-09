<?php

declare(strict_types=1);

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;

require dirname(__DIR__).'/vendor/autoload.php';

$token = $_GET['token'] ?? '';
$envToken = $_ENV['DEPLOY_TOKEN'] ?? $_SERVER['DEPLOY_TOKEN'] ?? null;

if (empty($envToken) || $token !== $envToken) {
    http_response_code(403);
    exit('Forbidden');
}

$kernel = new \App\Kernel('prod', false);

$application = new Application($kernel);
$application->setAutoExit(false);

$application->run(new ArrayInput([
    'command' => 'cache:clear',
    '--env' => 'prod',
    '--no-warmup' => true,
]));

$application->run(new ArrayInput([
    'command' => 'cache:warmup',
    '--env' => 'prod',
]));

echo 'OK';
