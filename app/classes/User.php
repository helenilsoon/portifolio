<?php
/*
 * 	Author: helenilson correa de oliveira
 *	Data : 16/11/2020 * 	method: LoadByID
 * 			loadAllUsers
 * 			serchUser
 * 			InsertUser
 * 			deleteUser
 * 			updateUser *
 * 
 */

namespace app\classes;

use app\DB\Sql;
/**
 *  Classe usuario 
 */
class User
{

	private $iduser;
	private $username;
	private $email;
	private $password;
	private $create_time;

	// carrega o usuario pelo id
	public function loadById($id){

		$sql = new Sql();

		$return = $sql->select("SELECT * FROM tb_users WHERE iduser = :ID",array(
			":ID"=>"$id"
		));


		if(count($return) > 0){

			$row = $return[0];

			$this->setIdUser($row['iduser']);
			$this->setUserName($row['username']);
			$this->setEmail($row['email']);
			$this->setPassword($row['password']);
			$this->setCreateTime(new \DateTime($row['create_time']));

		}		
	}

	//Carrega todos os usuarios
	public static function loadAllUsers(){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_users");

	}

	// Procurar um usuario pelo 
	// 
	public function login(){
		
	}
	//getter and setter
	public function getIdUser(){
		return $this->iduser;
	}
	public function setIdUser($value){
		$this->iduser  = $value;
	}
	public function getUserName(){
		return $this->username;
	}
	public function setUserName($value){
		$this->username  = $value;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setEmail($value){
		$this->email  = $value;
	}
	public function getPassword(){
		return $this->password;
	}
	public function setPassword($value){
		$this->password  = $value;
	}
	public function getCreateTime(){
		return $this->create_time
		;
	}
	public function setCreateTime($value){
		$this->create_time
		  = $value;
	}

	//metodo magico para quando manda imprimir na tela 
	public function __toString(){

		return json_encode(array(
				"ID"=>$this->getIdUser(),
				"Nome"=>$this->getUserName(),
				"Email"=>$this->getEmail(),
				"Senha"=>$this->getPassword(),
				"Data" =>$this->getCreateTime()->format("d:m:Y H:i:s")


		));

	}




	
}