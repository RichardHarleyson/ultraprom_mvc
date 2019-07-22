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
		}elseif ($product == 'cond_gaz_kotly') {
			$category = 3;
		}elseif ($product == 'electro_kotly') {
			$category = 4;
		}elseif ($product == 'stal_rad') {
			$category = 5;
		}elseif ($product == 'alum_rad') {
			$category = 6;
		}elseif ($product == 'bimetal_rad') {
			$category = 7;
		}elseif ($product == 'chugun_rad') {
			$category = 8;
		}elseif ($product == 'electro_rad') {
			$category = 9;
		}elseif ($product == 'design_rad') {
			$category = 10;
		}elseif ($product == 'comp_rad') {
			$category = 11;
		}elseif ($product == 'electro_flour') {
			$category = 12;
		}elseif ($product == 'truby_flour') {
			$category = 13;
		}elseif ($product == 'infro_flour') {
			$category = 14;
		}elseif ($product == 'water_flour') {
			$category = 15;
		}elseif ($product == 'collect_shkaf') {
			$category = 16;
		}elseif ($product == 'tverdotop_kotly') {
			$category = 17;
		}elseif ($product == 'comp_kotly') {
			$category = 18;
		}elseif ($product == 'empty') {
			$category = 19;
		}elseif ($product == 'empty') {
			$category = 20;
		}elseif ($product == 'ppr_pipes') {
			$category = 21;
		}elseif ($product == 'obj_fittings') {
			$category = 22;
		}elseif ($product == 'pipes_isol') {
			$category = 23;
		}elseif ($product == 'metal_pipes') {
			$category = 24;
		}elseif ($product == 'instock') {
			$category = 25;
		}elseif ($product == 'outstock') {
			$category = 26;
		}elseif ($product == 'quitstock') {
			$category = 27;
		}elseif ($product == 'wall_cond') {
			$category = 28;
		}elseif ($product == 'mobile_cond') {
			$category = 29;
		}elseif ($product == 'circ_pump') {
			$category = 30;
		}elseif ($product == 'electro_boiler') {
			$category = 31;
		}elseif ($product == 'waterheater') {
			$category = 32;
		}elseif ($product == 'gaz_kolonky') {
			$category = 33;
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
					 'Открытая (дымоходный)', 'Закрытый (турбированный)',
				],
				'Теплообменник' =>[
					 'Битермический', 'Раздельный',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country','filter_contur','filter_power','filter_burn_cam','filter_teploobmen'],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Настенные Газовые Котлы', $vars);
	}

	// Категория: напольные газовые котлы
	public function napolnue_gaz_kotly($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Напольные Газовые Котлы',
			'data_title'=>'napolnue_gaz_kotly',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Beretta', 'Dani', 'Ferolli', 'Fondital', 'Nova Florida', 'Protech',
					 'Protherm', 'Roda', 'Slime', 'Vaillant', 'Viadrus', 'Viessmann',
				],
				'Страна Производителя' => [
					'Германия', 'Италия', 'Украина', 'Чехия',
				],
				'Количество контуров' => [
					'Одноконтурный', 'Двухконтурный', 'Двухконтурный с Бойлером',
				],
				'Номинальная Тепловая Мощность(КВт)' => [
					 '10', '12', '13', '14', '16', '18', '20', '24', '25', '28',
						'30', '31', '32', '35', '36',
				],
				'Теплообменний' =>[
					 'Первичный','Битермический', 'Раздельный',
				],
				'Тип Розжига' => [
					'Пьезо', 'Электро',
				],
				'Способ Отвода Газов' => [
					'Турбированный', 'Дымоходный', 'Парапетный'
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country','filter_contur','filter_power','filter_teploobmen','filter_rozjig','filter_otvod'],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Напольные Газовые Котлы', $vars);
	}

	// Категория: Конденсационные Газовые Котлы
	public function cond_gaz_kotly($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Конденсационные Газовые Котлы',
			'data_title'=>'cond_gaz_kotly',
			'filter_data' => [
				'Производитель' => [
					'Airfel', 'Ariston', 'Baxi', 'Buderus', 'De Dietrich',
					'Fondital', 'Immergas', 'Nova florida', 'Protherm', 'Roda',
					'Sime', 'Vaillant', 'Viessmann Group',
				],
				'Страна Производителя' => [
					'Италия', 'Англия', 'Турция', 'Франция', 'Германия', 'Словакия',
				],
				'Количество контуров' => [
					'Одноконтурный', 'Двухконтурный', 'Двухконтурный с Бойлером',
				],
				'Номинальная Тепловая Мощность(КВт)' => [
					 '10', '12', '13', '14', '16', '18', '20', '24', '25', '28',
						'30', '31', '32', '35', '36',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country','filter_contur','filter_power'],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Конденсационные Газовые Котлы', $vars);
	}

	// Категория: Электрические Котлы
	public function electro_kotly($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Электрические Котлы',
			'data_title'=>'electro_kotly',
			'filter_data' => [
				'Производитель' => [
					'Heatman', 'Hi-Therm', 'Hot-Well', 'Kospel', 'Mora-Top','Protherm',
					'Roda', 'Tenko', 'Termit - Реноме', 'Vaillant', 'Маяк', 'Термия', 'Титан',
				],
				'Страна Производителя' => [
					'Чехи', 'Украина', 'Италия', 'Польша', 'Словакия', 'Турция',
				],
				'Наличие насоса' => [
					'Есть', 'Нет',
				],
				'Номинальная Тепловая Мощность(КВт)' => [
					 '3', '4', '6', '8', '9', '10', '12', '14', '15', '18',
						'21', '23', '24', '25', '28', '30', '36',
				],
				'Управление' => [
					 'Механическое', 'Электромеханическое', 'Электронное',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country','filter_nasos','filter_controller'],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Электрические Котлы', $vars);
	}
	// Категория: Твердотопливные Котлы
	public function tverdotop_kotly($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Твердотопливные Котлы',
			'data_title'=>'tverdotop_kotly',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Altep', 'Amica', 'Atmos', 'Caldera', 'Candle', 'Carbon',
					 'Carbon Lux', 'Demrad', 'Drew-Met',
				],
				'Страна Производителя' => [
					'Литва', 'Чехия', 'Италия', 'Польша', 'Россия', 'Турция',
				],
				'Номинальная Тепловая Мощность(КВт)' => [
					 '10', '12', '13', '14', '16', '18', '20', '24', '25', '28',
						'30', '31', '32', '35', '36',
				],
				'Теплообменник' => [
					 'Стальной', 'Чугунный',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country','filter_power','filter_tteploobmen'],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Твердотопливные Котлы', $vars);
	}
	// Категория: Комплектующие для Котлов
	public function comp_kotly($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Комплектующие для Котлов',
			'data_title'=>'comp_kotly',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Комплектующие для Котлов', $vars);
	}
	// Категория: Стальные Радиаторы
	public function stal_rad($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Стальные Радиаторы',
			'data_title'=>'stal_rad',
			'filter_data' => [
				'Производитель' => [
					'Aquatronic', 'DayLux', 'Emko', 'Hi-Therm', 'Kermi', 'Korad', 'Korado',
					 'Mastas', 'Protherm', 'Purmo', 'Rado', 'Roda',
					 'Rozma', 'Sanica', 'TERRA teknik', 'Vogel&Noot', 'Zoom Boilers',
				],
				'Страна Производителя' => [
					'Австрия', 'Чехия', 'Украина', 'Польша', 'Беларусь', 'Турция',
				],
				'Тип радиатора' => [
					'11', '22', '33',
				],
				'Высота радиатора(мм)' => [
					 '300', '400', '500', '600', '900',
				],
				'Длинна радиатора(мм)' => [
					 '400','500','600','700','800','900','1000','1100','1200','1400',
					 '1600','1800','2000','2100','2200','2300','2400','2500','2600','2700',
					 '2800','2900','3000',
				],
				'Подключение' =>[
					 'Боковое', 'Нижнее',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country','filter_rad_type','filter_rad_height','filter_rad_length','filter_rad_conn'],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Стальные Радиаторы', $vars);
	}
	// Категория: Алюминиевые Радиаторы
	public function alum_rad($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Алюминиевые Радиаторы',
			'data_title'=>'alum_rad',
			'filter_data' => [
				'Производитель' => [
					'Calgoni', 'Esperado', 'Faral', 'Ferroli', 'Global', 'Heat Line', 'Hi-Therm',
					 'Marek', 'Nova florida', 'Radal', 'Radiatori 2000', 'Roda',
					 'Royal Thermo', 'Sakura', 'Sira', 'Summer', 'Tianrun', 'Tianrun',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Испания', 'Польша', 'Украина',
				],
				'Межосевое расстояние(мм)' => [
					 '300','350','500','900','1000','1200','1400','1600','1800','2000',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country', 'filter_apex'],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Алюминиевые Радиаторы', $vars);
	}
	// Категория: Биметаллические Радиаторы
	public function bimetal_rad($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Биметаллические Радиаторы',
			'data_title'=>'bimetal_rad',
			'filter_data' => [
				'Производитель' => [
						'Calgoni', 'Esperado', 'Faral', 'Ferroli', 'Global', 'Heat Line', 'Hi-Therm',
						 'Marek', 'Nova florida', 'Radal', 'Radiatori 2000', 'Roda',
						 'Royal Thermo', 'Sakura', 'Sira', 'Summer', 'Tianrun', 'Tianrun',
					],
					'Страна Производителя' => [
						'Италия', 'Китай', 'Испания', 'Польша', 'Украина',
					],
					'Межосевое расстояние(мм)' => [
						 '300','350','500','900','1000','1200','1400','1600','1800','2000',
					],
				],
			'filter_headers' => ['filter_manufacturer','filter_country', 'filter_apex'],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Биметаллические Радиаторы', $vars);
	}
	// Категория: Чугунные Радиаторы
	public function chugun_rad($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Чугунные Радиаторы',
			'data_title'=>'chugun_rad',
			'filter_data' => [
				'Производитель' => [
						'Calgoni', 'Esperado', 'Faral', 'Ferroli', 'Global', 'Heat Line', 'Hi-Therm',
						 'Marek', 'Nova florida', 'Radal', 'Radiatori 2000', 'Roda',
						 'Royal Thermo', 'Sakura', 'Sira', 'Summer', 'Tianrun', 'Tianrun',
					],
					'Страна Производителя' => [
						'Италия', 'Китай', 'Испания', 'Польша', 'Украина',
					],
					'Межосевое расстояние(мм)' => [
						 '300','350','500','900','1000','1200','1400','1600','1800','2000',
					],
				],
			'filter_headers' => ['filter_manufacturer','filter_country', 'filter_apex'],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Чугунные Радиаторы', $vars);
	}
	// Категория: Электрические Радиаторы
	public function electro_rad($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Электрические Радиаторы',
			'data_title'=>'electro_rad',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Испания', 'Польша', 'Украина',
				],
				'Номинальная Тепловая Мощность(КВт)' => [
					 '10', '12', '13', '14', '16', '18', '20', '24', '25', '28',
						'30', '31', '32', '35', '36',
				],
				'Количество секций' => [
					'3', '4', '5', '6', '7', '8', '9', '10' , '11', '12'
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country','filter_power', 'filter_rad_sec'],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Электрические Радиаторы', $vars);
	}
	// Категория: Дизайнерские Радиаторы
	public function design_rad($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Дизайнерские Радиаторы',
			'data_title'=>'design_rad',
			'filter_data' => [
				'Производитель' => [
					'Carron', 'Global', 'RETROstyle', 'Royal Thermo',
				],
				'Страна Производителя' => [
					'Чехия', 'Англия', 'Италия', 'Турция', 'Австрия',
				],
				'Номинальная Тепловая Мощность(КВт)' => [
					 '10', '12', '13', '14', '16', '18', '20', '24', '25', '28',
						'30', '31', '32', '35', '36',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country','filter_power',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Дизайнерские Радиаторы', $vars);
	}
	// Категория: Комплектующие Для Радиаторов
	public function comp_rad($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Комплектующие Для Радиаторов',
			'data_title'=>'comp_rad',
			'filter_data' => [
				'Производитель' => [
					'Arco', 'HITTE', 'Polvax', 'Purmo', 'RETROstyle', 'Royal Thermo', 'SD Forte',
					 'Sira', 'TeploWatt', 'Tianrun', 'Verano',
				],
				'Страна Производителя' => [
					'Китай', 'Чехия', 'Италия', 'Польша', 'Россия', 'Турция',
				],
				'Тип Комплектации' => [
					'Кран Маевского','Напольный крепеж','Настенный крепеж','Кронштейн угловой',
					'Кронштейн анкерный','Решетка конвектора','Присоединительный набор','Кронштейн для сушки белья',
				],
				'Тип Радиаторов' => [
					 'Чугунные','Панельные','Секционные','Внутрипольные',
				],
				'Диаметр Подключения(дюйм)' => [
					 '1','1/2','3/4',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country','filter_contur','filter_power','filter_burn_cam','filter_teploobmen'],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Комплектующие Для Радиаторов', $vars);
	}
	// Категория: Электрический Теплый Пол
	public function electro_flour($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Электрический Теплый Пол',
			'data_title'=>'electro_flour',
			'filter_data' => [
				'Производитель' => [
					'Devi', 'Fenix', 'Green Box', 'IN-THERM', 'Nexans', 'TEPLOLUXE PROFI', 'WarmStad',
					 'Наш комфорт', 'Теплолюкс',
				],
				'Страна Производителя' => [
					'Дания', 'Чехия', 'Россия', 'Норвегия',
				],
				'Тип Теплого Пола' => [
					'Ногревальный мат','Нагревальный кабель',
				],
				'Способ Монтажа' => [
					 'В стяжку','В слой плиточного клея','Под напольное покрытие',
				],
				'Тип Кабеля' => [
					 'Двухжильный','Одножильный',
				],
				'Диаметр Кабеля(мм)' => [
					 '1','1/2','3/4',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country','filter_flour_type','filter_flour_montaj','filter_flour_cabtype', 'filter_flour_cabrad'],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Электрический Теплый Пол', $vars);
	}
	// Категория: Труба Для Теплого Пола
	public function truby_flour($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Труба Для Теплого Пола',
			'data_title'=>'truby_flour',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Труба Для Теплого Пола', $vars);
	}
	// Категория: Инфракрасный Теплый Пол
	public function infro_flour($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Инфракрасный Теплый Пол',
			'data_title'=>'infro_flour',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
				'Площадь Укладки' => [
					'0,5','1','2','3','4','5',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country','filter_flour_isqr'],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Инфракрасный Теплый Пол', $vars);
	}
	// Категория: Водяной Теплый Пол
	public function water_flour($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Водяной Теплый Пол',
			'data_title'=>'water_flour',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Водяной Теплый Пол', $vars);
	}
	// Категория: Коллекторные Шкафы
	public function collect_shkaf($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Коллекторные Шкафы',
			'data_title'=>'collect_shkaf',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Коллекторные Шкафы', $vars);
	}
	// Категория: ППР Трубы и Фитинги
	public function ppr_pipes($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'ППР Трубы и Фитинги',
			'data_title'=>'ppr_pipes',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - ППР Трубы и Фитинги', $vars);
	}
	// Категория: Обжимные Фитинги
	public function obj_fittings($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Обжимные Фитинги',
			'data_title'=>'obj_fittings',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Обжимные Фитинги', $vars);
	}
	// Категория: Изоляция для Труб
	public function pipes_isol($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Изоляция для Труб',
			'data_title'=>'pipes_isol',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Изоляция для Труб', $vars);
	}
	// Категория: Металопластиковые Трубы
	public function metal_pipes($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Металопластиковые Трубы',
			'data_title'=>'metal_pipes',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Металопластиковые Трубы', $vars);
	}
	// Категория: Внутрення Канализация
	public function instock($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Внутрення Канализация',
			'data_title'=>'instock',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Внутрення Канализация', $vars);
	}
	// Категория: Наружная Канализация
	public function outstock($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Наружная Канализация',
			'data_title'=>'outstock',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Наружная Канализация', $vars);
	}
	// Категория: Бесшумная Канализация
	public function quitstock($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Бесшумная Канализация',
			'data_title'=>'quitstock',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Бесшумная Канализация', $vars);
	}
	// Категория: Кандиционеры Настенного Типа
	public function wall_cond($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Кандиционеры Настенного Типа',
			'data_title'=>'wall_cond',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Кандиционеры Настенного Типа', $vars);
	}
	// Категория: Мобильные Кондиционеры
	public function mobile_cond($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Мобильные Кондиционеры',
			'data_title'=>'mobile_cond',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Мобильные Кондиционеры', $vars);
	}
	// Категория: Циркулярные Насосы
	public function circ_pump($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Циркулярные Насосы',
			'data_title'=>'circ_pump',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Циркулярные Насосы', $vars);
	}
	// Категория: Бойлеры Электрические
	public function electro_boiler($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Бойлеры Электрические',
			'data_title'=>'electro_boiler',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Бойлеры Электрические', $vars);
	}
	// Категория: Проточные Электрические Водонагреватели
	public function waterheater($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Проточные Электрические Водонагреватели',
			'data_title'=>'waterheater',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Проточные Электрические Водонагреватели', $vars);
	}
	// Категория: Газовые Колонки
	public function gaz_kolonky($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Газовые Колонки',
			'data_title'=>'gaz_kolonky',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Bosch', 'E.C.A', 'Immergas', 'Italtherm', 'Navien', 'Roctem',
					 'Roda', 'Saunier Duval', 'Termet', 'Tiberis', 'Valliant',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Газовые Колонки', $vars);
	}

}


?>
