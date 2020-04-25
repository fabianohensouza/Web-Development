<?php

	namespace MyApp\Controllers;
	
	class Home {

		//protected $container;
		protected $view;

		public function __construct($view) {

			$this->view = $view;

		}

		public function index($request, $response) {

			/*return $response->write('Index Test!');*/

			//$req = $this->container->get('request');
			//$view = $this->container->get('View');

			var_dump($this->view);

		}

	}

?>