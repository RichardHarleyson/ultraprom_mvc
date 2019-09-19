<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class Main_Controller extends Controller{

	public function indexAction(){
		$products = $this->model->getProducts();
		$products_onsale = $this->model->getProducts_onsale();
		$products_popular = $this->model->getProducts_popular();
		$slides = $this->model->getSlides();
		$vars =[
			'products' => $products,
			'onsale' => $products_onsale,
			'slides' => $slides,
			'popular' => $products_popular,
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

	public function brand_searchAction(){
		$brand['manufacturer_id'] = $this->route['brand'];
		$result = $this->model->brand_search($brand);
		$vars = [
			'result' => $result,
		];
		$this->view->path = '/main/search_page';
		$this->view->render('Автономное Отопление Днепр - "Ультрапром"', $vars);
	}


}

 ?>
