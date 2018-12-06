<?php
// Define path to application directory

defined('APPLICATION_PATH')
|| define('APPLICATION_PATH', realpath(__DIR__. '/../src/'));

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App();
// Set up dependencies
require __DIR__ . '/../src/dependencies.php';

// Register routes
require __DIR__ . '/../src/routes.php';

// Run app

$app->run();
