<?php 

/*
 * 	Author: helenilson correa de oliveira
 *	Data : 17/11/2020 * 	
 */

namespace app\classes;


class PageMail extends Page
{
	public function __construct($opts = array(), $tpl_dir = "/views/mail/")
	{
		parent::__construct($opts, $tpl_dir);
	}

	
}	