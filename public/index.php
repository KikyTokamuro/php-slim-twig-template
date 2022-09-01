<?php

require __DIR__ . '/../vendor/autoload.php';

use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Slim\Factory\AppFactory;

// Create App
$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

// Setup twig
$twig = Twig::create("../views", ["cache" => "../cache"]);
$app->add(TwigMiddleware::create($app, $twig));

// Routing
$app->get('/', [Controller\IndexController::class, 'index']); 
$app->get('/test', [Controller\TestController::class, 'test']);           

// Run App
$app->run();
