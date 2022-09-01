<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class TestController
{
    public static function test(Request $request, Response $response)
    {
        $response->getBody()->write('<h1>Test</h1>');
        return $response;
    }
}
