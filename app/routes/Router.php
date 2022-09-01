<?php

namespace App\Routes;

use App\Controller;

class Router
{
    public function __construct($app)
    {
        $this->app = $app;
    }

    public function setup()
    {
        $this->app->get('/', [Controller\IndexController::class, 'index']); 
        $this->app->get('/test', [Controller\TestController::class, 'test']);  
    }
}