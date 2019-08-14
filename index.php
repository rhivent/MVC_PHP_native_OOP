<?php

define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__FILE__));
// echo $_SERVER["PATH_INFO"];die();

// load configuration and helper functions
require_once(ROOT . DS . "config" . DS . "config.php");
require_once(ROOT . DS . "app" . DS . "lib" . DS . "helpers" . DS . "functions.php");

// autoload classes
spl_autoload_register(function ($className){
	if(file_exists(ROOT . DS . "core" . DS . $className . ".php")){
		require_once(ROOT . DS . "core" . DS . $className . ".php");
	}else if(file_exists(ROOT . DS . "app" . DS . "controllers" . DS . $className . ".php")){
		require_once(ROOT . DS . "app" . DS . "controllers" . DS . $className . ".php");
	}else if(file_exists(ROOT . DS . "models" . DS . $className . ".php")){
		require_once(ROOT . DS . "models" . DS . $className . ".php");
	}
});

session_start();

$url = isset($_SERVER["PATH_INFO"]) ? explode("/", ltrim($_SERVER["PATH_INFO"],"/")) : [];
// require_once(ROOT . DS . "core" . DS . "bootstrap.php");
// var_dump($url);
// $db = DB::getInstance();
// dnd($db);

//Route the request
Router::route($url);
