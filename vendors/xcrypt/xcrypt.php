<?php

include ('../config/database.php');
class xCrypt {
	
	var $salt = '';
	var $key = '';
	var $hash = '';
	var $bit = '';
	var $pass = '';
	
	function __construct() {
		$this->__setVars();
	}
	
	function __setK() {
		$var['database'] = 
		$var['salt'] = implode('', $_SERVER['SERVER_NAME']);
		$var['name'] = $_SERVER['SERVER_NAME'];
	}
}
?>