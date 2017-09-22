<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require './vendor/autoload.php';

$app = new \Slim\App;

/**
 * Inicio do bang :)
 * @var string
 */
$app->get('/', function (Request $request, Response $response) use ($app) {
    $response->getBody()->write("Bebê de Microservice!");
    $arr = ['maça' => ['casa', 'carro'], 'laranja' => 'outra'];
    foreach ($arr as $key => $value) {
    	

    	if ($key == 'maça') {
    		foreach ($value as $key => $value) {
    			echo '<br>'.$key.' '.$value.'-';
    		}
    	} else {
    		echo '<br>'.$key.' '.$value.'-';
    	}
    }
    return $response;
});


$app->run();