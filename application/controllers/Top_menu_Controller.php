<?php

namespace application\controllers;

use application\core\Controller;

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
		$this->view->render('Ultraprom - Прайсы');
	}

	public function catalogAction(){
		$this->view->render('Ultraprom - Прайсы');
	}

	public function contactsAction(){
		$this->view->render('Ultraprom - Прайсы');
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
