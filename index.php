<?php

ini_set("display_errors",1);

require __DIR__ . '/vendor/autoload.php';


use Slim\Factory\AppFactory;
use app\classes\Page;

$app = AppFactory::create();

//pagina inicial
$app->get("/", function($request, $response){

	$page = new Page();

	$page->setTpl("index");

	return $response;
});

//pagina sobre
$app->get("/sobre", function($request, $response){

	$page = new Page();

	$page->setTpl("sobre");

	return $response;

	return $response;
});

// contato
$app->get("/contato", function($request, $response){

	$page = new Page();

	$page->setTpl("contato");

	return $response;

	return $response;
});

$app->run();