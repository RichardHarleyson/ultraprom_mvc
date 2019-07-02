<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class Product_Controller extends Controller{

	public function pageAction(){
		$result = $this->model->getProduct($this->route['id']);
		$vars = [
			'product' => $result,
		];
		$title = $result[0]['title'].' - Лучшая цена '.number_format($result[0]['price_uah'], 0, ',', ' ').' грн';
		$this->view->render($title, $vars);
	}


}

 ?>
