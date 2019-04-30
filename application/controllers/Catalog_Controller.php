<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\db;

class Catalog_Controller extends Controller{

	public function mainAction(){
		$result = $this->model->getProducts();
		// $result = $this->model->getProduct($this->route['id']);
		$vars = [
			'result' => $result,
		];
		$this->view->render('Каталог', $vars);
	}
}


?>
