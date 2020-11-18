<?php

ini_set("display_errors",1);

require __DIR__ . '/vendor/autoload.php';


use Slim\Factory\AppFactory;
use app\classes\Page;
use app\classes\PageAdmin;
use app\classes\Site;
use app\controllers\MailController;


$app = AppFactory::create();

//pagina inicial
$app->get("/", function($request, $response){

	$page = new Page();

	$listaAllSites = Site::loadAllSites();


	$page->setTpl("index", array(
		"sites" => $listaAllSites
	));

	return $response;
});

//pagina sobre
$app->get("/sobre", function($request, $response){

	$page = new Page();

	$page->setTpl("sobre");

	return $response;

	
});

// contato
$app->get("/contato", function($request, $response){

	$page = new Page();

	$page->setTpl("contato");

	return $response;

	
});
$app->post("/contato", function($request, $response){

	session_start();
	
	$mail = new MailController($_POST);
	
	$data= $_SESSION['MSG'];

	$page = new Page();

	$page->setTpl("contato",$data);

	unset($_SESSION['MSG']);

	return $response;


	
});

// Admin
$app->get("/admin", function($request, $response){

	$page = new PageAdmin();
	$pasta = $_SERVER['DOCUMENT_ROOT'];


	
	$page->setTpl("index", array('url' => $pasta ));

	return $response;

	
});

$app->run();