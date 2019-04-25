<?php

namespace application\core;

use application\core\View;

class Router{

	protected $routes = [];
	protected $params = [];

	public function __construct(){
		$arr = require 'application/config/routes.php';
		foreach ($arr as $key => $value) {
			$this->add($key, $value);
		}
	}

	public function add($route, $params){
		$route = '#^'.$route.'$#';
		$this->routes[$route] = $params;
	}

	public function match(){
		$url = str_replace('/ultraprom_mvc/', '', $_SERVER['REQUEST_URI']);
		foreach ($this->routes as $route => $params) {
			if(preg_match($route, $url, $matches)){
				$this->params = $params;
				return true;
			}
		}
		return false;
	}

	public function run(){
		if($this->match()){
			$path = 'application\controllers\\'.ucfirst($this->params['controller']).'_Controller';
			if(class_exists($path)){
				$action = $this->params['action'].'Action';
				if(method_exists($path, $action)){
					$controller = new $path($this->params);
					$controller->$action();
				}else{
					echo 'State 1';
					View::errorCode(404);
				}
			}else{
				echo 'State 2';
				View::errorCode(404);
			}
		}else{
			echo 'State 3';
			View::errorCode(404);
		}
	}

}

 ?>
