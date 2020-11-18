<?php 

/*
 * 	Author: helenilson correa de oliveira
 *	Data : 16/11/2020 * 	method: LoadByID
 * 			
 */

namespace app\classes;

/**
 * 
 */
class PageAdmin extends Page
{
	
	public function __construct($opts = array(), $tpl_dir = "/views/admin/")
	{
		

		parent::__construct($opts, $tpl_dir);
	}
}