<?php

	namespace MyApp\Controllers;
	
	class Home {

		public function index($request, $response) {

			return $response->write('Index Test!');
			/*$id = $request->getAttribute('id');
		    echo '{ "Route": {

		                "Status": "Reached",
		                "Name": "' . $id . '"
		                     }
		          }';*/

		}

	}

?>