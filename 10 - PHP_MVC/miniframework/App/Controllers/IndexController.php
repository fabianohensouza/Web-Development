<?php

	namespace App\Controllers;

	class IndexController {

		private $view;

		public function __construct() {
			$this->view = new \stdClass();
		}

		public function index() {

			$this->view->dados = array('Sofá', 'Cadeira', 'Cama');
			$this->render('index');
		}

		public function sobreNos() {

			$this->view->dados = array('Notebook', 'Smartphone');
			$this->render('sobreNos');
		}

		public function render($view){
			
			$currentClass = get_class($this);
			$currentClass = str_replace('App\\Controllers\\', '', $currentClass);
			$currentClass = str_replace('Controller', '', $currentClass);
			$currentClass = strtolower($currentClass);

			require_once "../App/Views/".$currentClass."/".$view.".phtml";
		}
	}

?>