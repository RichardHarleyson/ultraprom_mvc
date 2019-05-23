<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class Catalog_Controller extends Controller{

	//глобальный чистый каталог
	public function mainAction(){
		$result = $this->model->getProducts();
		$vars = [
			'result' => $result,
		];
		$this->view->render('Каталог', $vars);
	}

	// Роутер каталога по категории товаров + сортировка
	public function catalog_routerAction(){
		$method = $this->route['product'];
		$category = $this->get_category($method);
		if(isset($this->route['type'])){
			$result = $this->model->getProducts_sorted($category, $this->route['type']);
			$this->$method($category,  $result);
		}else{
			$this->$method($category);
		}

	}

	// Определяем категорию товаров
	public function get_category($product){
		if($product == 'nastennue_gaz_kotly'){
			$category = 1;
		}elseif ($product == 'napolnue_gaz_kotly') {
			$category = 2;
		}
		return $category;
	}

	// Категория: настенные газовые котлы
	public function nastennue_gaz_kotly($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Настенные Газовые Котлы',
			'data_title'=>'nastennue_gaz_kotly',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
				'Количество контуров' => [
					'Одноконтурный', 'Двухконтурный', 'Двухконтурный с Бойлером',
				],
				'Номинальная Тепловая Мощность(КВт)' => [
					 '10', '12', '13', '14', '16', '18', '20', '24', '25', '28',
					  '30', '31', '32', '35', '36',
				],
				'Камера сгорания' => [
					 'Открытая (дымоходный)', 'Закрытий (турбированный)',
				],
				'Теплообменний' =>[
					 'Битермический', 'Раздельный',
				],
			],
			'filter_headers' => ['manufacturer','country','contur','power','burn_cam','teploobmen'],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Настенные Газовые Котлы', $vars);
	}


}


?>
