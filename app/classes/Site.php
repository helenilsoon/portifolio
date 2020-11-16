<?php
/*
 * 	Author: helenilson correa de oliveira
 *	Data : 16/11/2020 * 	method: LoadByID
 * 			
 * 
 */
namespace app\classes;

use app\DB\Sql;

/**
 * Classe que consulta o banco de dados e retorna o resultado
 */
class Site
{
	
	public static function loadAllSites()
	{
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_sites");
	}
}