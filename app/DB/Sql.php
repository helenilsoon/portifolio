<?php 
/*
 * 	Author: helenilson correa de oliveira
 *	Data : 16/11/2020
 *	
 */
namespace app\DB;

use PDO;

/**
 *  Classe que conecta no banco de dados
 */
class Sql extends PDO
{
	private $conn;
	 



	public function __construct()
	{ 
		$config = "configDb.ini";
	 	$confiDb = parse_ini_file($config);

		$this->conn = new PDO(
			"mysql:host={$confiDb['host']};dbname={$confiDb['dbname']}",
			$confiDb['user'],
			$confiDb['password']
		);
		

	}

	private function setParams($statement, $parameters = array())
	{
		foreach($parameters as $key => $value){

			$this->setParam($statement, $key, $value);
		}
	}

	private function setParam($statement, $key, $value)
	{
		$statement->bindParam($key,$value);
	}

	public function query($rawQuery, $params = array())
	{

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
	}

	public function select($rawQuery, $params = array()):array
	{

		$stmt= $this->query($rawQuery,$params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}
}