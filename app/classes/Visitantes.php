<?php 


namespace app\classes;

class Visitantes
{

	public function __construct()
	{

	session_start();
	
	$idvisitante= rand();
	if(isset($_SESSION['visitante']) == $idvisitante ){

		$visitante = $_SESSION['visitante'];

	}else{

		$visitante =$idvisitante ;
	}
	$_SESSION['visitante'] = $visitante ;

	##var_dump($_SESSION);


	}




}