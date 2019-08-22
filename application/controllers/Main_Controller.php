<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class Main_Controller extends Controller{

	public function indexAction(){
		$products = $this->model->getProducts();
		$products_onsale = $this->model->getProducts_onsale();
		$slides = $this->model->getSlides();
		$vars =[
			'products' => $products,
			'onsale' => $products_onsale,
			'slides' => $slides,
		];
		$this->view->render('Автономное Отопление Днепр - "Ультрапром"', $vars);
	}

	public function search_pageAction(){
		$result = $this->model->get_search($_POST['query']);
		$vars = [
			'result' => $result,
		];
		$this->view->render('Автономное Отопление Днепр - "Ультрапром"', $vars);
	}


}

 ?>
