<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class Main_Controller extends Controller{

	public function indexAction(){
		$products = $this->model->getProducts();
		$products_onsale = $this->model->getProducts_onsale();
		$vars =[
			'products' => $products,
			'onsale' => $products_onsale,
		];
		$this->view->render('Автономное Отопление Днепр - "Ультрапром"', $vars);
	}


}

 ?>
