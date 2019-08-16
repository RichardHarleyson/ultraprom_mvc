<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class Product_Controller extends Controller{

	public function pageAction(){
		$product = $this->model->getProduct($this->route['id']);
		// debug(empty($product));
		if(empty($product)){
			$this->redirect('');
		}
		$same_products = $this->model->get_same_products($product[0]['category_id']);
		$reviews = $this->model->get_reviews($product[0]['id']);
		// var_dump($product);
		$lcategory_ename = $this->model->lcategory_ename($product[0]['category_id']);
		// var_dump($lcategory_ename);
		$category_ename = $this->model->category_ename($lcategory_ename[0]['c_id']);
		// var_dump($category_ename);
		$vars = [
			'product' => $product,
			'same_products' => $same_products,
			'lcategory_ename' => $lcategory_ename,
			'category_ename' => $category_ename,
			'reviews' => $reviews,
		];
		$title = $product[0]['title'].' - Лучшая цена '.number_format($product[0]['price_uah'], 0, ',', ' ').' грн';
		$this->view->render($title, $vars);
	}

	public function new_reviewAction(){
		$review = [
			'product_id' => $_POST['product_id'],
			'uname' => $_POST['uname'],
			'review' => $_POST['review'],
			'rating' => $_POST['rating'],
		];
		$result = $this->model->new_review($review);
		// Обновляем рейтинг товара по отзывам
		$get_reviews = $this->model->get_reviews($_POST['product_id']);
		$total_review = 0;
		foreach ($get_reviews as $key => $value) {
			$total_review += $value['rating'];
		}
		$new_rating = (int)($total_review / count($get_reviews));
		$result = $this->model->update_rating($new_rating, $_POST['product_id']);
		echo $result;
	}

}

 ?>
