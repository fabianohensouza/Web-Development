<?php

	namespace MF\Init;

	abstract class Bootstrap {

		private $routes;
		private $valida = False;

		abstract protected function initRoutes();

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

		protected function getUrl() {

			return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			//return parse_url('www.google.com?x=10');
		}

		protected function run($url) {

			foreach ($this->getRoutes() as $key => $route) {

				if($url ==$route['route']) {

					$class = "App\\Controllers\\".ucfirst($route['controller']);

					$controller = new $class;
					$action = $route['action'];
					echo '<hr>'.$action.' -- '.$url.'<hr>';
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