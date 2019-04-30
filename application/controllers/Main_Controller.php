<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\db;

class Main_Controller extends Controller{

	public function indexAction(){
		// $vars = [
			// 'name' => 'Vasya',
			// 'age' => '88',
			// 'array' => [1, 2, 3],
		// ];

		// $form = 2;
		// $params = [
		// 	'id' => 2,
		// ];
		// $db = new Db;
		// $data = $db->column('SELECT name FROM users WHERE id=:id', $params);
		// debug($data);

		$result = $this->model->getProducts();
		// $vars = array_chunk($result, 5, true);
		$vars =[
			'result' => $result,
		];
		$this->view->render('Автономное Отопление Днепр - "Ултрапром"', $vars);
	}


}

 ?>
