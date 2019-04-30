<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\db;

if(empty($_SESSION['cart'])){
	$_SESSION['cart'] = array();
};

class Cart_Controller extends Controller{

	public function mainAction(){
		$data = $_SESSION['cart'];
		$vars = [
			'data' => $data,
		];
		$this->view->render('Корзина', $vars);
	}

	public function add_itemAction(){
		$items = [
			'id' => $_POST['id'],
			'title' => $_POST['title'],
			'price' => $_POST['price'],
			'quantity' => 1
		];
		array_push($_SESSION['cart'], $items);
		echo true;
	}

	public function empty_cartAction(){
		unset($_SESSION['cart']);
		echo true;
	}

	public function delete_itemAction(){
		array_splice($_SESSION['cart'], $_POST['index'], 1);
		echo true;
	}
}


?>
