<?php

	namespace App;

	class Route {

		private $routes;
		private $valida = False;

		public function __construct() {
			
			$this->initRoutes();
			$this->run($this->getUrl());
		}

		public function getRoutes() {

			return $this->routes;
		}

		public function setRoutes(array $routes) {

			$this->routes = $routes;
		}

		public function initRoutes() {

			$routes['home'] = array(
				'route' => '/',
				'controller' => 'indexController',
				'action' => 'index'
			);

			$routes['sobre_nos'] = array(
				'route' => '/sobre_nos',
				'controller' => 'indexController',
				'action' => 'sobreNos'
			);

			$this->setRoutes($routes);
		}

		public function getUrl() {
			return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			//return parse_url('www.google.com?x=10');
		}

		public function run($url) {

			foreach ($this->getRoutes() as $key => $route) {

				if($url ==$route['route']) {

					$class = "App\\Controllers\\".ucfirst($route['controller']);

					$controller = new $class;
					print_r($controller);
					$action = $route['action'];
					echo '<hr>'.$action.'//'.$url.'<hr>';
					$controller->$action();

					$this->valida = True;
				}
			}

			if(!$this->valida) {
				echo '<hr>A URL '.$url.' Inválida!';
			}
		}
	}

?>