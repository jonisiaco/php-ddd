<?php

namespace App;

use League\Route\RouteCollectionInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response;

class Routes 
{
	public static function map(RouteCollectionInterface $router): RouteCollectionInterface
	{
		#IndexController
		$router->map('GET', '/', 'App\User\Application\Controller\IndexController::index');
		$router->map('GET', '/about', 'App\User\Application\Controller\IndexController::about');
		$router->map('GET', '/default', 'App\User\Application\Controller\IndexController::default');
		$router->map('GET', '/no-template', function (ServerRequestInterface $request) : ResponseInterface {
		    $response = new Response;
		    $response->getBody()->write('<h1>Good!</h1>');
		    return $response;
		});

		return $router;
	}
	
}