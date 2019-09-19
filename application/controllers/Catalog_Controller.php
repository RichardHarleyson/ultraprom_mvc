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

	public function gcatalogAction(){
		$category = $this->route['category'];
		$getcategory = $this->model->getCategories($category);
		$lcategory = $this->model->getLcategory($getcategory);
		$vars = [
			'category' => $getcategory,
			'lcategory' => $lcategory,
		];
		$title = $vars['category'][0]['c_name'].' - Каталог';
		$desc = $vars['category'][0]['c_name'].' купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Монтаж, сервис, гарантия, качество.';
		$this->view->render($title, $vars, $desc);
	}

	// Определяем категорию товаров
	public function get_category($product){
		// вытащить id категории из базы
		$categories = $this->model->getCategory();
		foreach ($categories as $item) {
			if($item['eng_name'] == $product){
				$category = $item['id'];
			}
		}
		return $category;
	}

	// Категория: настенные газовые котлы
	public function Nastennie_Gazovie_Kotli($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Настенные Газовые Котлы',
			'data_title'=>'Nastennie_Gazovie_Kotli',
			'filter_data' => [
				'Производитель' => [
					'Ariston','Baxi','Beretta','Bosch','Buderus','Ferroli','Immergas',
					'Protherm','Vaillant','Viessmann','Westen','Saunier Duval',
				],
				'Тепловая Мощность' => [
					 'До 20 кВт','20 - 24 кВт','24 - 30 кВт','30 – 40 кВт','Свыше 40 кВт',
				],
				'Отапливаемая площадь' => [
					'До 120 м2','До 200 м2','До 250 м2','До 300 м2','До 400 м2','Свыше 400 м2',
				],
				'Количество контуров' => [
					'Одноконтурный', 'Двухконтурный', 'Двухконтурный + бойлер',
				],
				'Отвод продуктов сгорания' => [
					 'Турбированный (Turbo)', 'Дымоходный (Atmo)',
				],
				'Страна Производителя' => [
					'Германия','Италия','Корея','Франция','Турция','Китай','Словакия',
					'Португалия','Польша','Чехия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_power','filter_heating_square',
				'filter_contur','filter_burn_cam','filter_country'],
			'product_list' => $products,
		];
		// $desc = ' купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Настенные Газовые Котлы', $vars);
	}

	// Категория: напольные газовые котлы
	public function Napolynie_Gazovie_Kotli($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Напольные Газовые Котлы',
			'data_title'=>'Napolynie_Gazovie_Kotli',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Beretta', 'Bosch', 'Buderus', 'Protherm', 'Vailant', 'Viessmann',
				],
				'Тепловая Мощность' => [
					 'До 20 кВт','20 - 24 кВт','24 - 30 кВт','30 – 40 кВт','40 – 50 кВт',
					 '50 - 100 кВт','Свыше 100 кВт',
				],
				'Отапливаемая площадь' => [
					'До 120 м2','До 200 м2','До 250 м2','До 300 м2','До 400 м2','До 500 м2',
					'Свыше 500 м2',
				],
				'Количество контуров' => [
					'Одноконтурный', 'Двухконтурный',
				],
				'Отвод продуктов сгорания' => [
					'Турбированный (Turbo)', 'Дымоходный (Atmo)'
				],
				'Страна Производителя' => [
					'Германия', 'Италия', 'Турция', 'Словакия', 'Португалия', 'Польша', 'Чехия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_power','filter_heating_square',
				'filter_contur','filter_burn_cam','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Напольные Газовые Котлы', $vars);
	}

	// Категория: Конденсационные Газовые Котлы
	public function Kondesatsionnie_Gazovie_Kotli($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Конденсационные Газовые Котлы',
			'data_title'=>'Kondesatsionnie_Gazovie_Kotli',
			'filter_data' => [
				'Производитель' => [
					'Ariston','Baxi','Beretta','Bosch','Buderus','Ferroli','Immergas',
					'Protherm','Vaillant','Viessmann','Westen','Saunier Duval',
				],
				'Тепловая Мощность' => [
					 'До 20 кВт','20 - 24 кВт','24 - 30 кВт','30 – 40 кВт','Свыше 40 кВт',
				],
				'Отапливаемая площадь' => [
					'До 120 м2','До 200 м2','До 250 м2','До 300 м2','До 400 м2','Свыше 400 м2',
				],
				'Количество контуров' => [
					'Одноконтурный', 'Двухконтурный',
				],
				'Страна Производителя' => [
					'Германия','Италия','Корея','Франция','Турция','Китай','Словакия',
					'Португалия','Польша','Чехия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_epower','filter_heating_square',
				'filter_contur','filter_country'],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Конденсационные Газовые Котлы', $vars);
	}

	// Категория: Электрические Котлы
	public function Yalektricheskie_Kotli($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Электрические Котлы',
			'data_title'=>'Yalektricheskie_Kotli',
			'filter_data' => [
				'Производитель' => [
					'Bosch','Ferroli','Hi-Therm', 'Hot-well', 'Kospel','Mora-top','Protherm',
					'Tenko', 'Vaillant', 'Титан', 'Днепр',
				],
				'Электрическая Мощность' => [
					 '3 - 5 кВт','6 - 10 кВт','11 - 15 кВт','16 - 20 кВт','21 - 25 кВт',
					 '26 - 30 кВт','36 - 40 кВт','41 - 45 кВт','51 - 60 кВт',
				],
				'Напряжение Питания' => [
					 '220','380','220-380'
				],
				'Отапливаемая площадь' => [
					'До 50 м2','До 80 м2','До 100 м2','До 120 м2','До 200 м2','До 250 м2',
					'До 300 м2','До 400 м2','Свыше 400 м2',
				],
				'Наличие насоса' => [
					'Есть', 'Нет',
				],
				'Страна Производителя' => [
					'Германия','Италия','Корея','Франция','Турция','Китай','Украина','Словакия',
					'Португалия','Польша','Чехия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_epower','filter_napryajenie',
				'filter_heating_square','filter_nasos','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Электрические Котлы', $vars);
	}

	// Категория: Твердотопливные Котлы
	public function Tverdotoplivnie_Kotli($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Твердотопливные Котлы',
			'data_title'=>'Tverdotoplivnie_Kotli',
			'filter_data' => [
				'Производитель' => [
					'ATON','Altep','Baxi','Bosch','Buderus','Defro','Kronvas','Viadrus','Данко',
				],
				'Тепловая Мощность' => [
					 'До 20 кВт','20 - 24 кВт','24 - 30 кВт','30 – 40 кВт','Свыше 40 кВт',
				],
				'Отапливаемая площадь' => [
					'До 120 м2','До 200 м2','До 250 м2','До 300 м2','До 400 м2','До 600 м2',
					'До 800 м2','Свыше 800 м2',
				],
				'Теплообменник' => [
					 'Стальной', 'Чугунный',
				],
				'Управление' => [
					 'Механическое', 'Электронное',
				],
				'Страна Производителя' => [
					'Германия','Италия','Турция','Украина','Польша','Чехия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_power', 'filter_heating_square',
				'filter_tteploobmen', 'filter_controller', 'filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Твердотопливные Котлы', $vars);
	}
	// Категория: Комплектующие для Котлов
	public function Komplektuyushtie_dlya_Kotlov($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Комплектующие для Котлов',
			'data_title'=>'Komplektuyushtie_dlya_Kotlov',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Beretta', 'Bosch', 'Buderus', 'Ferroli', 'Protherm', 'Vaillant',
					 'Viessmann', 'Westen',
				],
			],
			'filter_headers' => ['filter_manufacturer',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Комплектующие для Котлов', $vars);
	}
	// Категория: Стальные Радиаторы
	public function Stalynie_Radiatori($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Стальные Радиаторы',
			'data_title'=>'Stalynie_Radiatori',
			'filter_data' => [
				'Производитель' => [
					'Djoul','DaVinci','Energy','Kermi','Korado','Purmo','Terra Teknik',
					'Copa','Krafter','Tiberis',
				],
				'Тип радиатора' => [
					'Тип 11', 'Тип 22', 'Тип 33',
				],
				'Высота радиатора(мм)' => [
					 '200','300', '400', '500', '600', '900',
				],
				'Длинна радиатора(мм)' => [
					 '400','500','600','700','800','900','1000','1100','1200','1300','1400','1500',
					 '1600','1700','1800','1900','2000','2100','2200','2300','2400','2500','2600','2700',
					 '2800','2900','3000',
				],
				'Подключение' =>[
					 'Боковое', 'Нижнее',
				],
				'Страна Производителя' => [
						'Германия','Польша','Украина','Турция','Италия','Чехия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_rad_type','filter_rad_height','filter_rad_length','filter_rad_conn','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Стальные Радиаторы', $vars);
	}
	// Категория: Алюминиевые Радиаторы
	public function Alyuminievie_Radiatori($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Алюминиевые Радиаторы',
			'data_title'=>'Alyuminievie_Radiatori',
			'filter_data' => [
				'Производитель' => [
					'DaVinci','Mirado','Global','MAREK',
				],
				'Глубина Секции, мм' => [
					 '80','90','96','100',
				],
				'Межосевое расстояние, мм' => [
					 '350','500','800','1600',
				],
				'Страна Производителя' => [
					'Германия','Польша','Украина','Италия','Словакия','Китай'
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_apex','filter_deep_sec','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Алюминиевые Радиаторы', $vars);
	}
	// Категория: Биметаллические Радиаторы
	public function Bimetallicheskie_Radiatori($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Биметаллические Радиаторы',
			'data_title'=>'Bimetallicheskie_Radiatori',
			'filter_data' => [
					'Производитель' => [
						'DaVinci','Mirado','Global','MAREK',
					],
					'Глубина Секции, мм' => [
						 '80','90','96','100',
					],
					'Межосевое расстояние, мм' => [
						 '350','500','800','1600',
					],
					'Страна Производителя' => [
						'Германия','Польша','Украина','Италия','Словакия','Китай'
					],
				],
			'filter_headers' => ['filter_manufacturer','filter_deep_sec','filter_apex','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Биметаллические Радиаторы', $vars);
	}
	// Категория: Чугунные Радиаторы
	public function Chugunnie_Radiatori($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Чугунные Радиаторы',
			'data_title'=>'Chugunnie_Radiatori',
			'filter_data' => [
				'Производитель' => [
						'Viadrus',
					],
					'Страна Производителя' => [
						'Турция',' Чехия'
					],
				],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Чугунные Радиаторы', $vars);
	}
	// Категория: Электрические Радиаторы
	public function Yalektricheskie_Radiatori($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Электрические Радиаторы',
			'data_title'=>'Yalektricheskie_Radiatori',
			'filter_data' => [
				'Производитель' => [
					'Sun Wind'
				],
				'Страна Производителя' => [
					'Украина',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Электрические Радиаторы', $vars);
	}
	// Категория: Дизайнерские Радиаторы
	public function Dizaynerskie_Radiatori($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Дизайнерские Радиаторы',
			'data_title'=>'Dizaynerskie_Radiatori',
			'filter_data' => [
				'Производитель' => [
					'Korado',
				],
			],
			'filter_headers' => ['filter_manufacturer',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Дизайнерские Радиаторы', $vars);
	}
	// Категория: Комплектующие Для Радиаторов
	public function Komplektuyushtie_dlya_Radiatorov($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Комплектующие Для Радиаторов',
			'data_title'=>'Komplektuyushtie_dlya_Radiatorov',
			'filter_data' => [
				'Производитель' => [
					'Fado','Global','Royal Thermo'
				],
			],
			'filter_headers' => ['filter_manufacturer',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Комплектующие Для Радиаторов', $vars);
	}

	// Категория: Электрический Теплый Пол
	public function Yalektricheskie_Tepliy_Pol($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Электрический Теплый Пол',
			'data_title'=>'Yalektricheskie_Tepliy_Pol',
			'filter_data' => [
				'Производитель' => [
					'Devi', 'Nexans',
				],
				'Тип Теплого Пола' => [
					'Пленка','Кабель','Мат'
				],
				'Тип Кабеля' => [
					 'Двухжильный','Одножильный',
				],
				'Площадь мата, м2' => [
					 '0.5','0.75','1.0','1.5','2.0','2.5','3.0','3.5',
					 '4.0','5.0','6.0','7.0','8.0','10.0','12.0','14.0',
				],
				'Страна Производителя' => [
					'Дания', 'Польша', 'Норвегия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_flour_type','filter_flour_cabtype','filter_flour_isqr','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Электрический Теплый Пол', $vars);
	}
	// Категория: Труба Для Теплого Пола
	public function Truba_dlya_Teplogo_Pola($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Труба Для Теплого Пола',
			'data_title'=>'Truba_dlya_Teplogo_Pola',
			'filter_data' => [
				'Производитель' => [
					'Djoul','Fado','Giacomini','Icma','Kermi','Rehau','TECE','VALTEC',
				],
				'Диаметр Трубы, мм' => [
					'10','14','16','17','20',
				],
				'Страна Производителя' => [
					'Германия', 'Турция','Украина','Италия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country','filter_pipe_rad',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Труба Для Теплого Пола', $vars);
	}
	// Категория: Инфракрасный Теплый Пол
	public function Infrakrasniy_Tepliy_Pol($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Инфракрасный Теплый Пол',
			'data_title'=>'Infrakrasniy_Tepliy_Pol',
			'filter_data' => [
				'Производитель' => [
					'Danfoss','Djoul','Fado','Giacomini','Icma','Kermi','Rehau','TECE',
					'VALTEC','Watts',
				],
				'Площадь Укладки' => [
					'0,5','1','2','3','4','5',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country','filter_flour_isqr'],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Инфракрасный Теплый Пол', $vars);
	}
	// Категория: Водяной Теплый Пол
	public function Vodyanoy_Tepliy_Pol($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Водяной Теплый Пол',
			'data_title'=>'Vodyanoy_Tepliy_Pol',
			'filter_data' => [
				'Производитель' => [
					'Danfoss','Djoul','Fado','Giacomini','Icma','Kermi','Rehau','TECE',
					'VALTEC','Watts',
				],
				'Тип Изделия ТП' => [
					'Труба для теплого пола','Коллекторная группа','Маты и плиты для пола',
					'Смесительный узел','Автоматика','Шкафы','Термоголовка с датчиком',
					'Добавки в бетон','Демпферная лента','Крепежи','Комплектующие',
				],
				'Страна Производителя' => [
					'Германия', 'Дания', 'Польша','Турция', 'Италия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_ttype','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Водяной Теплый Пол', $vars);
	}
	// Категория: Коллекторные Шкафы
	public function Kollektornie_Shkafi($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Коллекторные Шкафы',
			'data_title'=>'Kollektornie_Shkafi',
			'filter_data' => [
				'Производитель' => [
					'Djoul',
				],
				'Тип' => [
					'Встроенный','Наружный'
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_stype',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Коллекторные Шкафы', $vars);
	}

	// Категория: Электрические Полотенцесушители
	public function Yalektricheskie_polotentsesushiteli($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Электрические Полотенцесушители',
			'data_title'=>'Yalektricheskie_polotentsesushiteli',
			'filter_data' => [
				'Производитель' => [
					'ELNA','Mario'
				],
				'Тип Полотенцесушителя' => [
					'Водяные','Электрические'
				],
				'Форма Полотенцесушителя' => [
					'Змеевик','Лесенка'
				],
				'Подключение' => [
					'Нижнее','Боковое'
				],
				'Цвет Полотенцесушителя' => [
					'Белый','Сталь','Хром'
				],
				'Страна Производителя' => [
					'Италия', 'Украина'
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_tdryer_type','filter_tdryer_form',
				'filter_tdryer_connect','filter_tdryer_colour','filter_country'],
			'product_list' => $products,
		];
		// $desc = ' купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Электрические Полотенцесушители', $vars);
	}

	// Категория: ППР Трубы и Фитинги
	public function PPR_Trubi_i_Fitingi($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'ППР Трубы и Фитинги',
			'data_title'=>'PPR_Trubi_i_Fitingi',
			'filter_data' => [
				'Производитель' => [
					'Ekoplastik','Fado','VALTEC',
				],
				'Тип Изделия' => [
					'Трубы','Фитинги','Крепления'
				],
				'Тип Фитинга' => [
					'Заглушка','Муфта соеденительная','Муфта редукционная','Муфта с внутренней резьбой',
					'Муфта с наружной резьбой','Муфта с накидной гайкой','Угол соеденительный',
					'Угол с внутренней резьбой','Угол с наружной резьбой','Угол установочный',
					'Тройник равнопроходной','Тройник редукционный','Тройник с внутренней резьбой',
					'Тройник с наружной резьбой','Тройник двойной','Кран, вентиль','Планка монтажная','Коллектор',
				],
				'Страна Производителя' => [
					'Италия', 'Чехия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_ppr_type','filter_fitting_type','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - ППР Трубы и Фитинги', $vars);
	}

	// Категория: Обжимные Фитинги
	public function Obzhimnie_Fitingi($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Обжимные Фитинги',
			'data_title'=>'Obzhimnie_Fitingi',
			'filter_data' => [
				'Производитель' => [
					'Fado',
				],
				'Диаметр Трубы, мм' => [
					'16','20','26','32',
				],
				'Тип Изделия' => [
					'Трубы','Фитинги',
				],
				'Тип Фитинга' => [
					'Муфта соеденительная','Муфта с внутренней резьбой','Муфта с наружной резьбой',
					'Угол соеденительный','Угол с внутренней резьбой','Угол с наружной резьбой',
					'Угол установочный','Тройник равнопроходной','Тройник с внутренней резьбой',
					'Тройник с наружной резьбой',
				],
				'Страна Производителя' => [
					'Италия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_pipe_rad','filter_ppr_type',
					'filter_fitting_type','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Обжимные Фитинги', $vars);
	}
	// Категория: Изоляция для Труб
	public function Izolyatsiya_dlya_Trub($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Изоляция для Труб',
			'data_title'=>'Izolyatsiya_dlya_Trub',
			'filter_data' => [
				'Производитель' => [
					'Master Therm','NMC','Teploizol',
				],
				'Диаметр, мм' => [
					'18','22','28','35',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_pipe_rad',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Изоляция для Труб', $vars);
	}
	// Категория: Металопластиковые Трубы
	public function Metaloplastikovie_Trubi($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Металопластиковые Трубы',
			'data_title'=>'Metaloplastikovie_Trubi',
			'filter_data' => [
				'Производитель' => [
					'Fado','Valsir','VALTEC'
				],
				'Страна Производителя' => [
					'16','20','26','32',
				],
				'Страна Производителя' => [
					'Италия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_pipe_rad','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Металопластиковые Трубы', $vars);
	}
	// Категория: Внутрення Канализация
	public function Vnutrennyaya_Kanalizatsiya($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Внутрення Канализация',
			'data_title'=>'Vnutrennyaya_Kanalizatsiya',
			'filter_data' => [
				'Производитель' => [
					'Aquer','Ostendorf','Armakan'
				],
				'Тип Фитинга Канализации' => [
					'Труба','Заглушка','Муфта','Колено','Тройник','Редукция','Ревизия',
					'Компенсатор','Крестовина','Адаптер чугун-пластик','Колено Универсальное',
					'Колено WC','Трап Сточный','Хомут Крепежный','Силикон',
				],
				'Страна Производителя' => [
					'Германия','Польша','Турция'
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_stockfit_type','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Внутрення Канализация', $vars);
	}
	// Категория: Наружная Канализация
	public function Naruzhnaya_Kanalizatsiya($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Наружная Канализация',
			'data_title'=>'Naruzhnaya_Kanalizatsiya',
			'filter_data' => [
				'Производитель' => [
					'Ostendorf'
				],
				'Тип Фитинга Канализации' => [
					'Труба','Муфта','Колено','Тройник','Редукция','Ревизия',
				],
				'Диаметр Канализации' => [
					'110мм','160мм','200мм','250мм','315мм','400мм','500мм'
				],
				'Страна Производителя' => [
					'Германия','Румыния'
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_stockfit_type',
				'filter_stock_rad','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Наружная Канализация', $vars);
	}
	// Категория: Бесшумная Канализация
	public function Besshumnaya_Kanalizatsiya($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Бесшумная Канализация',
			'data_title'=>'Besshumnaya_Kanalizatsiya',
			'filter_data' => [
				'Производитель' => [
					'Ostendorf','Rehau'
				],
				'Тип Фитинга Канализации' => [
					'Труба','Заглушка','Муфта','Колено','Тройник','Редукция','Ревизия',
					'Компенсатор','Крестовина','Колено WC','Манжет',
				],
				'Страна Производителя' => [
					'Германия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Бесшумная Канализация', $vars);
	}
	// Категория: Кандиционеры Настенного Типа
	public function Konditsioneri_Nastennogo_Tipa($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Кандиционеры Настенного Типа',
			'data_title'=>'Konditsioneri_Nastennogo_Tipa',
			'filter_data' => [
				'Производитель' => [
					'CHIGO','Cooper&hunter','DAIKIN','DEKKER','EWT','GREE','IDEA','LG','LUBERG',
					'Midea','Mitsubishi Electric','Mitsubishi HEAVY','NEOCLIMA','OLMO','OSAKA',
					'Panasonic','Samsung','TOSHIBA','TOSOT',
				],
				'Обогрев Зимой' => [
					'-5°С', '-7°С', '-10°С', '-15°С', '-20°С', '-23°С','-25°С','-30°С',
				],
				'Инверторная Технология' => [
					'Нет','Да'
				],
				'Мощность, БТЕ/час' => [
					'05','07','09','12','18','24','30','36',
				],
				'Площадь охлаждения, м2' => [
					'до 15 м2','до 20 м2','до 30 м2','до 40 м2','до 60 м2','до 80 м2',
					'до 100 м2','до 120 м2',
				],
				'Тип хладагента:' => [
					'r-32','r-410a','r-410',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_wheating','filter_invert',
					'filter_bpower','filter_csquare','filter_ctype','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Кандиционеры Настенного Типа', $vars);
	}
	// Категория: Мобильные Кондиционеры
	public function Mobilynie_Konditsioneri($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Мобильные Кондиционеры',
			'data_title'=>'Mobilynie_Konditsioneri',
			'filter_data' => [
				'Производитель' => [
					'BALLU','CHIGO','ELECTROLUX','NEOCLIMA',
				],
				'Мощность, БТЕ/час' => [
					'07','09','11','12','13','15',
				],
				'Площадь охлаждения, м2' => [
					'до 15 м2','до 20 м2','до 30 м2','30 м2','35 м2','до 40 м2','40 м2',
					'до 60 м2','до 80 м2','до 100 м2','до 120 м2',
				],
				'Тип хладагента:' => [
					'r-410a','r-410',
				],
				'Страна Производителя' => [
					'Китай',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_bpower','filter_csquare',
				'filter_ctype','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Мобильные Кондиционеры', $vars);
	}
	// Категория: Увлажнители Воздуха
	public function Uvlazhniteli_Vozduha($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Мобильные Кондиционеры',
			'data_title'=>'Uvlazhniteli_Vozduha',
			'filter_data' => [
				'Производитель' => [
					'BONECO',
				],
				'Площадь Увлажнения, м2' => [
					'до 40 м2',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_csquare','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Мобильные Кондиционеры', $vars);
	}
	// Категория: Циркулярные Насосы
	public function Tsirkulyarnie_Nasosi($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Циркулярные Насосы',
			'data_title'=>'Tsirkulyarnie_Nasosi',
			'filter_data' => [
				'Производитель' => [
					'Grundfos','Wilo'
				],
				'Напор, м' => [
					'2 - 3 м','3 - 4 м','4 - 5 м','6 -8 м','8 - 12 м',
				],
				'Производтельность, мЗ/час' => [
					'2 - 4 м3/час','4 - 5 м3/час','5 - 6 м3/час','6 - 8 м3/час',
					'8 - 10 м3/час','10 - 12 м3/час',
				],
				'Монтажная Длина, мм' => [
					'130мм','180мм',
				],
				'Потребляемая Мощность, Вт' => [
					'20 - 40 Вт','40 - 60 Вт','60 - 80 Вт','80 - 100 Вт','100 - 120 Вт','120 - 150 Вт',
					'150 - 200 Вт','200 - 250 Вт',
				],
				'Электропитания, В' => [
					'220','380',
				],
				'Страна Производителя' => [
					'Германия','Дания',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_napryajenie','filter_napor',
					'filter_effect','filter_nepower','filter_mlength','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Циркулярные Насосы', $vars);
	}
	// Категория: Бойлеры Электрические
	public function Boyleri_Yalektricheskie($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Бойлеры Электрические',
			'data_title'=>'Boyleri_Yalektricheskie',
			'filter_data' => [
				'Производитель' => [
					'ARTI','Ariston','Atlantic','Bosch','Drazice','Eldom','TESY',
				],
				'Форма Бойлера' => [
					'Цилиндрический','Прямоугольный','Slim (тонкий)','Плоский','Компактный',
				],
				'Установка Бойлера' => [
					'Под мойку', 'Над мойкой', 'Настенный', 'Настенный вертикальный',
					'Настенный горизонтальный', 'Вертикальный/Горизонтальный','Напольный',
				],
				'Тип Нагревательного Тэна' => [
					'"Сухой"', '"Мокрый"',
				],
				'Объем Бойлера' => [
					'5 - 10', '11 - 15', '16 - 30', '31 - 50', '51 - 60', '61 - 80','81 - 100','101 - 120',
					'121 - 150','151 - 200','201 - 250','251 - 300','300','400','500',
					'750','800','1000','2000',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_bform','filter_bset',
				'filter_tentype','filter_bsqrt','filter_country',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Бойлеры Электрические', $vars);
	}
	// Категория: Проточные Электрические Водонагреватели
	public function Protochnie_Yalektricheskie_Vodonagrevateli($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Проточные Электрические Водонагреватели',
			'data_title'=>'Protochnie_Yalektricheskie_Vodonagrevateli',
			'filter_data' => [
				'Производитель' => [
					'Zanussi',
				],
			],
			'filter_headers' => ['filter_manufacturer',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Проточные Электрические Водонагреватели', $vars);
	}
	// Категория: Газовые Колонки
	public function Gazovie_Kolonki($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Газовые Колонки',
			'data_title'=>'Gazovie_Kolonki',
			'filter_data' => [
				'Производитель' => [
					'Ariston','Bosch','Demrad',
				],
			],
			'filter_headers' => ['filter_manufacturer',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Газовые Колонки', $vars);
	}
	// Категория: Программаторы
	public function Programmatori($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Программаторы',
			'data_title'=>'Programmatori',
			'filter_data' => [
				'Производитель' => [
					'Computherm','Auraton','Salus',
				],
				'Тип Программатора' => [
					'Проводной','Беспроводной','с Wi-Fi',
				],
			],
			'filter_headers' => ['filter_manufacturer',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Программаторы', $vars);
	}
	// Категория: Стабилизаторы Напряжения
	public function Stabilizatori_Napryazheniya($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title' => 'Стабилизаторы Напряжения',
			'data_title'=>'Stabilizatori_Napryazheniya',
			'filter_data' => [
				'Производитель' => [
					'LVT',
				],
			],
			'filter_headers' => ['filter_manufacturer',],
			'product_list' => $products,
		];
		$this->view->render('Каталог - Стабилизаторы Напряжения', $vars);
	}

}


?>
