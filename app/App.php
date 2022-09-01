<?php

namespace App;

use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Slim\Factory\AppFactory;

use App\Routes\Router;

class App
{
    public function __construct() {
        $this->createApp();
        $this->setupTwig();
        $this->setupRouting();         
    }
        
    /**
     * createApp - Create app
     *
     * @return void
     */
    private function createApp()
    {
        $this->app = AppFactory::create();
        $this->app->addErrorMiddleware(true, true, true);
    }
    
    /**
     * setupTwig - Setup twig middlware
     *
     * @return void
     */
    private function setupTwig()
    {
        $twig = Twig::create("../app/views", ["cache" => "../cache"]);
        $this->app->add(TwigMiddleware::create($this->app, $twig));
    }
    
    /**
     * setupRouting - Setup routing
     *
     * @return void
     */
    private function setupRouting()
    {
        (new Router($this->app))->setup();
    }

    /**
     * run - Run app
     *
     * @return void
     */
    public function run()
    {
        $this->app->run();
    }
}