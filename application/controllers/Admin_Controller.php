<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class Admin_Controller extends Controller{

	public function loginAction(){
		$this->view->layout = 'empty';
		$this->view->render('Ultraprom - Вход в Панель Администратора');
	}

	public function log_inAction(){
		$_SESSION['admin'] = true;
		return true;
	}

	public function panelAction(){
		$this->view->layout = 'admin';
		$this->view->render('Ultraprom - Панель Администратора');
	}

	public function productsAction(){
		$this->view->layout = 'admin';
		$categories = $this->model->get_categoroies();
		$vars = [
			'categories' => $categories,
		];
		$this->view->render('Ultraprom - Товары', $vars);
	}

	public function currencyAction(){
		$this->view->layout = 'admin';
		$this->view->render('Ultraprom - Валюты');
	}

	public function create_productAction(){
		if(isset($_POST['title'])){
			foreach ($_POST as $key => $value) {
				$vars[$key] = $value;
			}
			//Сохраняем фото
			$target_dir = "/home/newworld/domains/ultraprom.new/public_html/public/media/uploads/";
			$target_file = $target_dir . basename($_FILES["photo"]["name"]);

			$name = pathinfo($_FILES['photo']['name'], PATHINFO_FILENAME);
			$extension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
			$i = 0;
			while(file_exists($target_file)){
				$target_file = $target_dir . $name . $i . '.' . $extension;
				$i++;
			}

			if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
				 // echo "Товар ".$vars['title']." успешно загружен";
	 			$vars['photo'] = $name.$i.'.'.$extension;
		 	} else {
				 // echo "Sorry, there was an error uploading your file.";
		 	}

			//Добавляем доп параметры
			if($vars['photo'] == ''){
				$vars['status'] = 0;
			}
			$vars['status'] = 1;

			if($vars['available'] == 'off'){
				$vars['available'] = 0;
			}
			$vars['available'] = 1;

			$vars['manufacturer'] = 1;

			// power_id
			// stat_list

			$result = $this->model->create_product($vars);

			var_dump($result);
		}
	}

	public function create_product_query($vars){

	}


}


?>
