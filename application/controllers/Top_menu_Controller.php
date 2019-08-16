<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class Top_menu_Controller extends Controller{

	public function about_usAction(){
		$this->view->render('Ultraprom - О Нас');
	}

	public function servicesAction(){
		$this->view->render('Ultraprom - Услуги');
	}

	public function pricesAction(){
		$this->view->render('Ultraprom - Прайсы');
	}

	public function central_heatingAction(){
		$this->view->render('Ultraprom - Автономное Отопление');
	}

	public function catalogAction(){
		$brands = $this->model->getBrands();
		$vars =[
			'brands' => $brands,
		];
		$this->view->render('Ultraprom - Каталог', $vars);
	}

	public function contactsAction(){
		$this->view->render('Ultraprom - Контакты');
	}

	public function price_listAction(){
		if($this->route['id'] == '1'){
			$this->view->path = 'top_menu/price1';
			$this->view->render('Ultraprom - Прайс(Отопление, Водоснабжение, Канализация)');
		}elseif($this->route['id'] == '2'){
			$this->view->path = 'top_menu/price2';
			$this->view->render('Ultraprom - Прайс(Демонтажные работы)');
		}elseif($this->route['id'] == '3'){
			$this->view->path = 'top_menu/price3';
			$this->view->render('Ultraprom - Прайс(Электромонтажные работы)');
		}elseif($this->route['id'] == '4'){
			$this->view->path = 'top_menu/price4';
			$this->view->render('Ultraprom - Прайс(Полы)');
		}elseif($this->route['id'] == '5'){
			$this->view->path = 'top_menu/price5';
			$this->view->render('Ultraprom - Прайс(Потолки)');
		}elseif($this->route['id'] == '6'){
			$this->view->path = 'top_menu/price6';
			$this->view->render('Ultraprom - Прайс(Стены)');
		}elseif($this->route['id'] == '7'){
			$this->view->path = 'top_menu/price7';
			$this->view->render('Ultraprom - Прайс(Проемы, Двери, Окна)');
		}elseif($this->route['id'] == '8'){
			$this->view->path = 'top_menu/price8';
			$this->view->render('Ultraprom - Прайс(Дополнительные Работы)');
		}
	}

	public function contacts_sendAction(){
		if(isset($_POST['email'])){
				$to = 'richard.harleyson@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
				$subject = 'Обратная связь'; //Загаловок сообщения
				$message = '
										<html>
												<head>
														<title>'.$_POST['subject'].'</title>
												</head>
												<body>
														<p>Имя: '.$_POST['name'].'</p>
														<p>Email: '.$_POST['email'].'</p>
														<p>Сообщение: '.$_POST['message'].'</p>
												</body>
										</html>'; //Текст нащего сообщения можно использовать HTML теги
				$headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
				$headers .= "From: ultraprom <ultraprom@ultraprom.com>\r\n"; //Наименование и почта отправителя
				mail($to, $subject, $message, $headers);
		}
		return true;
	}

}


?>
