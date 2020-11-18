<?php 

/*
 * 	Author: helenilson correa de oliveira
 *	Data : 16/11/2020 * 	method: LoadByID
 * 			
 * 
 */
namespace app\classes;

use Rain\Tpl;
/**
 * Classe Page carrega o template 
 *
 * @package default
 * @author helenilson 
 **/

class Page
{

	private $tpl;
	private $options=[];
	private $defaults = [
		"data"   => [],
		"header" => true,
		"footer" => true
	];

	public function __construct($opts= array(), $tpl_dir = "/views/site/")
	{

		$this->options = array_merge($this->defaults , $opts);
		$this->options['data']= array(
			"url" => $_SERVER['DOCUMENT_ROOT'],
			"site"=> $_SERVER['HTTP_HOST']
		);
		 
		$pasta = $_SERVER['DOCUMENT_ROOT']."/app";

		
		$config = array(
			"tpl_dir"  => $pasta . $tpl_dir,
			"cache_dir"=> $pasta . "/views/.cache/",
			"debug"    => false
		);


		//setando a configuração
		Tpl::configure($config);

		// intânciando o tpl
		$this->tpl = new Tpl;

		$this->setData($this->options['data']);
		//carregando a pagina header
		if($this->options['header'] != false) $this->tpl->draw("header");				
	}

	//carrega o conteudo da pagina
	//
	public function setTpl($name, $data = array(), $returnHTML = false)
	{
		$this->setData($data);

		return $this->tpl->draw($name,$returnHTML);
	}


	private function setData($data = array())
	{
		foreach ($data as $key => $value) {
				$this->tpl->assign($key,$value);
				
			}

	}	

	// carreando a pagina footer
	public function __destruct()
	{
		if($this->options['footer'] != false) $this->tpl->draw("footer");
	}


}