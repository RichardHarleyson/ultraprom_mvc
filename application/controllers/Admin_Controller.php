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
		$global_category = $this->model->get_global_categoroies();
		$category = $this->model->get_categoroies();
		$lower_category = $this->model->get_lower_categoroies();
		$manufacturer = $this->model->get_manufacturer();
		$slides = $this->model->get_slides();
		$reviews = $this->model->get_reviews();
		$vars = [
			'global_category' => $global_category,
			'category' => $category,
			'lower_category' => $lower_category,
			'manufacturer' => $manufacturer,
			'slides' => $slides,
			'reviews' => $reviews,
		];
		$this->view->render('Ultraprom - Панель Администратора', $vars);
	}

	public function add_categoryAction(){
		$category['c_name'] = $_POST['category_name'];
		$category['eng_name'] = $this->translit($category['c_name']);
		$category['gc_id'] = $_POST['global_category'];
		// var_dump($category);
		$result = $this->model->add_category($category);
		echo $result;
	}

	public function add_lower_categoryAction(){
		$category['lc_name'] = $_POST['lower_category_name'];
		$category['eng_name'] = $this->translit($category['lc_name']);
		$category['lc_image'] = $this->add_image('lower_category_image');
		$category['c_id'] = (int)$_POST['category'];
		var_dump($category);
		$result = $this->model->add_lower_category($category);
		echo $result;
	}

	public function add_manufacturerAction(){
		$manufacturer['m_name'] = $_POST['manufacturer_name'];
		$manufacturer['m_image'] = $this->add_image('manufacturer_image');
		// var_dump($manufacturer);
		$result = $this->model->add_manufacturer($manufacturer);
		echo $result;
	}

	public function add_slideAction(){
		$slide['s_image'] = $this->add_image('slide_image');
		$slide['s_url'] = $_POST['slide_url'];
		echo $this->model->add_slide($slide);
	}

	public function upd_reviewsAction(){
		var_dump($_POST);
		if($_POST['r_status'] == 0){
			echo $this->model->del_review($_POST['review_id']);
			return 1;
		}
		$review['id'] = $_POST['review_id'];
		$review['status'] = $_POST['r_status'];
		echo $this->model->upd_reviews($review);
		return 1;
	}

	public function del_manufacturerAction(){
		$manufacturer['id'] = $_POST['manufacturer_id'];
		$result = $this->model->del_manufacturer($manufacturer);
		echo $result;
	}

	public function del_slideAction(){
		return $this->model->del_slide($_POST['slide_id']);
	}

	public function productsAction(){
		$this->view->layout = 'admin';
		$lcategories = $this->model->get_lower_categoroies();
		$manufacturers = $this->model->get_manufacturer();
		$products = $this->model->get_products();
		$vars = [
			'categories' => $lcategories,
			'products' => $products,
			'manufacturers' => $manufacturers,
		];
		$this->view->render('Ultraprom - Товары', $vars);
	}

	public function add_image($img_key){
		// var_dump($_FILES);
		$target_dir = "/home/newworld/domains/ultraprom.new/public_html/public/media/uploads/";
		$target_file = $target_dir . basename($_FILES[$img_key]["name"]);

		$name = pathinfo($_FILES[$img_key]['name'], PATHINFO_FILENAME);
		$extension = pathinfo($_FILES[$img_key]['name'], PATHINFO_EXTENSION);
		$i = 0;
		while(file_exists($target_file)){
			$target_file = $target_dir . $name . $i . '.' . $extension;
			$i++;
		}
		$target_file = $target_dir . $name . $i . '.' . $extension;

		if (move_uploaded_file($_FILES[$img_key]["tmp_name"], $target_file)) {
			 // echo "Товар ".$vars['title']." успешно загружен";
			return $name.$i.'.'.$extension;
		} else {
			 return 0;
		}
	}

	public function create_productAction(){
		if(isset($_POST['title'])){
			foreach ($_POST as $key => $value) {
				$vars[$key] = $value;
			}
			var_dump($vars);
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

			$vars['eng_name'] = $this->translit($vars['title']);

			//Добавляем доп параметры
			if($vars['photo'] == ''){
				$vars['status'] = 0;
			}else{
				$vars['status'] = 1;
			}

			if(array_key_exists( 'available' , $vars)){
				if($vars['available'] == 'on'){
					$vars['available'] = 1;
				}
			}else{
				$vars['available'] = 0;
			}

			if(array_key_exists( 'onsale' , $vars)){
				if($vars['onsale'] == 'on'){
					$vars['onsale'] = 1;
				}
			}else{
				$vars['onsale']	= 0;
			}

			$vars['manufacturer'] = 1;

			$vars['stat_list'] = trim($vars['param_string'], ';');


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
			$result = $this->model->create_product($vars);
		}
	}

	public function product_updateAction(){
		if($_POST['del'] == 'true'){
			// Удаляем запись
			$result = $this->model->product_del($_POST['item_id']);
			return $result;
		}
		$product = [
			'id' => $_POST['id'],
			'title' => $_POST['item_title'],
			'price' => (int)$_POST['item_price'],
			'currency' => (int)$_POST['item_currency'],
			'price_uah' => 0,
			'description' => $_POST['item_description'],
		];
		if(array_key_exists( 'item_available' , $_POST)){
			if($_POST['item_available'] == 'on'){
				$product['available'] = 1;
			}
		}else{
			$product['available'] = 0;
		}
		if(array_key_exists( 'item_onsale' , $_POST)){
			if($_POST['item_onsale'] == 'on'){
				$product['onsale'] = 1;
			}
		}else{
			$product['onsale']	= 0;
		}
		//Обновляем цену по валюте
		$currencies = $this->model->get_currencies();
		$curr_buy = [];
		foreach ($currencies as $curr) {
			$curr_buy[$curr['id']] = $curr;
		}
		$product['price_uah'] = $product['price'] * $curr_buy[$_POST['item_currency']]['sale'];

		$result = $this->model->product_update($product);
		if(!(empty($_FILES['photo']['name']))){
			$photo_upd = array();
			$photo_upd['photo'] = $this->add_image('photo');
			$photo_upd['id'] = $_POST['id'];
			$result = $this->model->update_photo($photo_upd);
		}
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
