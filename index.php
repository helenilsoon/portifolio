<?php

##ini_set("display_errors",1);
##error_reporting(E_ERROR  |E_WARNING | E_PARSE | E_NOTICE);

require __DIR__ . '/vendor/autoload.php';


use Slim\Factory\AppFactory;
use app\classes\Page;
use app\classes\PageAdmin;
use app\classes\Site;
use app\controllers\MailController;
use app\classes\Visitantes;

$visitantes = new Visitantes();

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



// Envio de email atraves da pagina contanto pelo metodo post
$app->post("/contato", function($request, $response){	
	 

	if(isset($_SESSION['contador']) ==  $_SESSION['contador']){
		 $cont = $_SESSION['contador'];
		 $cont ++;

		 
	}else{
		$cont = 1;
	}
	
	 var_dump( $_SESSION['contador']);

     $_SESSION['contador'] =  $cont ;

     if($cont >= 5){
		 	$_SESSION['MSG']['AVISO']="você so poderar enviar mensagem novamente em 30 minutos";
		 	header("Location: /contato");
		 	
		 }else{

		 	$mail = new MailController($_POST);
		 	$data= $_SESSION['MSG'];
		 	$page = new Page();

			$page->setTpl("contato",$data);

			header("Location: /contato");

			return $response;

		 }
	
    
    	

    

	

	
});

// Admin
$app->get("/admin", function($request, $response){

	$page = new PageAdmin();
	$pasta = $_SERVER['DOCUMENT_ROOT'];

	
	$page->setTpl("index", array('url' => $pasta ));

	return $response;

	
});

$app->get("/{url}", function($request, $response, $url){

    
	$page = new Page();
	try {
		$data= isset($_SESSION['MSG'])? $_SESSION['MSG']: '';

		$page->setTpl($url['url'],$data);

		


	} catch (Exception $e) {
		

		$page->setTpl('Ooops');

	}
	
	

unset($_SESSION['MSG']);
	return $response;



	
});

$app->get("/blog/{url}", function($request, $response,$url){

   
	$page = new Page();
	try {
		
		$pasta = $_SERVER['HTTP_HOST'];

    	$page->setTpl($url['url'],array('url' => $pasta ));

	} catch (Exception $e) {
		
		echo $e->getMessage();
		$page->setTpl('Ooops');
	}
	

	return $response;

	
});




$app->run();