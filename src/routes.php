<?php // Routes

/* @var $app \Slim\App */

$app->post('consume/{dataSource}/{dataType}',\Edfa3ly\Consumer\Controllers\ConsumerController::class . ':startConsuming');