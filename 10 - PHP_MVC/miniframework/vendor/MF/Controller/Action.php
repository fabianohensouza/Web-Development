<?php

	namespace MF\Controller;

	abstract class Action {

		protected $view;

		public function __construct() {
			$this->view = new \stdClass();
		}

		protected function render($view){
			
			$currentClass = get_class($this);
			$currentClass = str_replace('App\\Controllers\\', '', $currentClass);
			$currentClass = str_replace('Controller', '', $currentClass);
			$currentClass = strtolower($currentClass);

			require_once "../App/Views/".$currentClass."/".$view.".phtml";
		}

	}


?>