<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

class IndexController
{
    public static function index(Request $request, Response $response)
    {
        return Twig::fromRequest($request)
            ->render($response, 'index.twig', []);
    }
}
