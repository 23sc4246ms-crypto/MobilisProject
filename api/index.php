<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Ensure serverless environment defaults
if (! getenv('APP_KEY')) {
    putenv('APP_KEY=base64:KWwd+/q+9jzk7rMwpOf7Yf27oOSVShdlKhASMDbeaKg=');
    $_ENV['APP_KEY'] = 'base64:KWwd+/q+9jzk7rMwpOf7Yf27oOSVShdlKhASMDbeaKg=';
}

if (! getenv('APP_ENV')) {
    putenv('APP_ENV=production');
    $_ENV['APP_ENV'] = 'production';
}

if (! getenv('APP_DEBUG')) {
    putenv('APP_DEBUG=false');
    $_ENV['APP_DEBUG'] = 'false';
}

if (! getenv('SESSION_DRIVER')) {
    putenv('SESSION_DRIVER=cookie');
    $_ENV['SESSION_DRIVER'] = 'cookie';
}

if (! getenv('CACHE_STORE')) {
    putenv('CACHE_STORE=array');
    $_ENV['CACHE_STORE'] = 'array';
}

if (! getenv('LOG_CHANNEL')) {
    putenv('LOG_CHANNEL=stderr');
    $_ENV['LOG_CHANNEL'] = 'stderr';
}

if (! getenv('APP_MAINTENANCE_DRIVER')) {
    putenv('APP_MAINTENANCE_DRIVER=array');
    $_ENV['APP_MAINTENANCE_DRIVER'] = 'array';
}

// Temporary writable storage in /tmp
$tmpStorage = '/tmp/storage';
$dirs = [
    $tmpStorage.'/framework/views',
    $tmpStorage.'/framework/cache/data',
    $tmpStorage.'/framework/sessions',
    $tmpStorage.'/logs',
    $tmpStorage.'/app/public',
];

foreach ($dirs as $dir) {
    if (! is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

putenv('VIEW_COMPILED_PATH='.$tmpStorage.'/framework/views');
$_ENV['VIEW_COMPILED_PATH'] = $tmpStorage.'/framework/views';

putenv('APP_CONFIG_CACHE=/tmp/config.php');
putenv('APP_EVENTS_CACHE=/tmp/events.php');
putenv('APP_PACKAGES_CACHE=/tmp/packages.php');
putenv('APP_ROUTES_CACHE=/tmp/routes.php');
putenv('APP_SERVICES_CACHE=/tmp/services.php');

// Register Composer autoloader
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

// Handle incoming HTTP request and output response
$app->handleRequest(Request::capture());
