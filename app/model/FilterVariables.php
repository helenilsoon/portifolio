<?php 
/**
 * CLasse pra filtrar as variaveis
 * @date 18/11/2020
 * @package default
 * @author helenilson Oliveira <helenilsoon@gmail.com>
 * 
 **/

namespace app\model;


class FilterVariables 
{
	public static function int($value)
	{	
		return $value = filter_var($value, FILTER_VALIDATE_INT);
	}
	public static function char($value)
	{
		return $value = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
	}
	public static function url($value)
	{
		return $value = filter_var($value, FILTER_SANITIZE_URL);
	}
	public static function float($value)
	{
		return $value = filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT);
	}
	public static function string($value)
	{
		return $value = filter_var($value, FILTER_SANITIZE_STRING);
	}
	public static function email($value)
	{
		return $value = filter_var($value, FILTER_SANITIZE_EMAIL);
	}

} // END class FilterVariables 





