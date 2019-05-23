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
		$this->view->render('Product Page', $vars);
	}


}

 ?>
