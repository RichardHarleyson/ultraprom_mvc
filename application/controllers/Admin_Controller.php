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
		// login: ultraprom
		// pass: zakharov
		$login_str = md5(strtolower($_POST['login'].$_POST['pass']));
		if($login_str == 'd6087a60d8e8137561bd09c79b7da636'){
			$_SESSION['admin'] = true;
			echo 1;
		}else{
			echo 0;
		}

	}

	public function panelAction(){
		$this->view->layout = 'admin';
		$this->view->render('Ultraprom - Панель Администратора');
	}

	public function productsAction(){
		$this->view->layout = 'admin';
		$categories = $this->model->get_categoroies();
		$products = $this->model->get_products();
		$vars = [
			'categories' => $categories,
			'products' => $products,
		];
		$this->view->render('Ultraprom - Товары', $vars);
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
			$target_file = $target_dir . $name . $i . '.' . $extension;

			if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
				 // echo "Товар ".$vars['title']." успешно загружен";
	 			$vars['photo'] = $name.$i.'.'.$extension;
		 	} else {
				 // echo "Sorry, there was an error uploading your file.";
		 	}

			//Добавляем доп параметры
			if($vars['photo'] == ''){
				$vars['status'] = 0;
			}else{
				$vars['status'] = 1;
			}

			if($vars['available'] == 'off'){
				$vars['available'] = 0;
			}else{
				$vars['available'] = 1;
			}

			if($vars['onsale'] == 'off'){
				$vars['onsale'] = 0;
			}else{
				$vars['onsale']	= 1;
			}

			$vars['manufacturer'] = 1;

			// filter_info
			$filter_info = array_filter(
				$vars,
				function($key){
					return(strpos($key, 'filter_') !== false);
				},
				ARRAY_FILTER_USE_KEY
			);
			$filter_info_str = '';
			foreach ($filter_info as $key => $value) {
				$filter_info_str .= $key.':'.ucwords($value).';';
			};
			$filter_info_str = trim($filter_info_str, ';');
			$vars['filter_info'] = $filter_info_str;

			// обновляем цену от валюты
			$currencies = $this->model->get_currencies();
			$curr_buy = [];
			foreach ($currencies as $curr) {
				$curr_buy[$curr['id']] = $curr;
			}
			$vars['price_uah'] = $vars['price'] * $curr_buy[$vars['currency']]['buy'];
			// $vars['price_uah'] = 0;
			// power_id
			// stat_list

			$result = $this->model->create_product($vars);

			// var_dump($result);
			echo $vars['filter_info'];
		}
	}

	public function product_updateAction(){
		if($_POST['del'] == 'true'){
			// Удаляем запись
			$this->model->product_del($_POST['item_id']);
			return 0;
		}
		$product = [
			'id' => $_POST['item_id'],
			'title' => $_POST['item_title'],
			'price' => (int)$_POST['item_price'],
			'currency' => (int)$_POST['item_currency'],
			'price_uah' => 0,
			'description' => $_POST['item_description'],
			'onsale' => 0,
			'available' => 0,
		];
		if($_POST['item_onsale'] == 'true'){
			$product['onsale'] = 1;
		}
		if($_POST['item_available'] == 'true'){
			$product['available'] = 1;
		}
		//Обновляем цену по валюте
		$currencies = $this->model->get_currencies();
		$curr_buy = [];
		foreach ($currencies as $curr) {
			$curr_buy[$curr['id']] = $curr;
		}
		$product['price_uah'] = $product['price'] * $curr_buy[$_POST['item_currency']]['buy'];

		$result = $this->model->product_update($product);

		var_dump($product);
	}

	public function currencyAction(){
		$this->view->layout = 'admin';
		$currency_json = json_decode(file_get_contents('https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5', true));
		$vars =[
			'currency' => $currency_json,
		];
		$this->view->render('Ultraprom - Валюты', $vars);
	}

	public function currency_auto_updateAction(){
		$data =[
			'usd_buy' => $_POST['usd_buy'],
			'usd_sale' => $_POST['usd_sale'],
			'eur_buy' => $_POST['eur_buy'],
			'eur_sale' => $_POST['eur_sale'],
		];
		$result = $this->model->set_currency($data);
		//обновляем ценники в соответствии с курсом
		$this->model->update_prices();
		echo 1;
	}

}


?>
