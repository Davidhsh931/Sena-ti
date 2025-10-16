<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

/** @var \Illuminate\Foundation\Application $app */
$app = require __DIR__.'/../bootstrap/app.php';

$request = Request::capture();

/** @var \Illuminate\Contracts\Http\Kernel $kernel */
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle($request);

$response->send();

$kernel->terminate($request, $response);