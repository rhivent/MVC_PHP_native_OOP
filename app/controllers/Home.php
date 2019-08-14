<?php

class Home extends Controller {
	public function __construct($controller,$action){
		parent::__construct($controller,$action);
	}

	// public function indexAction($name){
		// die('welcome to the home controller this is the index action');
	// 	echo $name;
	// 	$this->view->render('home/index');
	// }

	public function indexAction(){
		// die('welcome to the home controller this is the index action');
		$db = DB::getInstance();
		$sql = "SELECT * FROM `contacts` WHERE 1 ";
		$contactsQ = $db->query($sql);
		dnd($contactsQ);

		$this->view->render('home/index');
	}


}