<?php 

/**
 * Controlador de email 
 */
namespace app\controllers;


use app\classes\Mail;
use app\model\FilterVariables;


class MailController 
{
		private $name;					
		private $email;		
		private $whatsApp;	
		private $descrition;

	
	function __construct($post = array())
	{ 	
		if($key = array_search('',$post)){
			echo "<script>document.write('o campo $key não pode ser vazio. sorry')</script>";
				exit;
		}else{			
			$this->setName(FilterVariables::char($post['name']));
			$this->setEmail(FilterVariables::email($post['email']));
			$this->setWhatsApp(FilterVariables::int($post['whatsApp']));
			$this->setDescrition(FilterVariables::string($post['descrition']));
			
		}
		
	
		$post = array(
			"nome"=>$this->getName(),
			"email"=>$this->getEmail(),
			"whatsApp"=>$this->getWhatsApp(),
			"descrition"=>$this->getDescrition()
		);
		

		$mail = new Mail();
		$mail->enviar($post);

	}
	 
	

	//getter and setter
	public function getName(){
		return $this->name;
	}
	public function setName($value){
		$this->name = $value;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setEmail($value){
		$this->email = $value;
	}
	public function getWhatsApp(){
		return $this->whatsApp;
	}
	public function setWhatsApp($value){
		$this->whatsApp = $value;
	}public function getDescrition(){
		return $this->descrition;
	}
	public function setDescrition($value){
		$this->descrition = $value;
	
	}
}