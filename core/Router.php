<?php

class Router {

	public static function route($url){
		// var_dump($url);
		// die();
		// dnd($url);

		// controller
		$controller = (isset($url[0]) && $url[0] != "") ? ucwords($url[0]) : DEFAULT_CONTROLLER;
		$controller_name = $controller;
		array_shift($url);

		//action
		$action = (isset($url[0]) && $url[0] != "") ? $url[0]."Action" : "indexAction";
		$action_name = $controller;
		array_shift($url);

		// params
		$queryParams = $url;
		$dispatch = new $controller($controller_name, $action);
		
		// echo $controller . '<br/>';
		// echo $action . '<br/>';
		// if(method_exists($controller, $action)){
		// 	call_user_func_array([$dispatch,$action],$action, $queryParams);
		if(method_exists($controller, $action)){
			call_user_func_array([$dispatch,$action],$queryParams);
		}else{
			die('That method does not exist in the controller \"' . $controller_name . '\"');
		}
		// dnd($url);
		// $dispatch->registerAction($queryParams);
	}
}