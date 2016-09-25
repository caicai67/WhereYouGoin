<!-- <?php

require '../vendor/autoload.php';
$app = new \Slim\Slim();

$app->get('/', function() use($app){
	$app->response->setStatus(200);
	echo "Welcome to slim !";

});

$app->run();

?> -->

<?php
// use \Psr\Http\Message\ServerRequestInterface as Request;
// use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/', function() use($app){
	$app->response->setStatus(200);
	echo "Welcome to slim !";

});
$app->run();
