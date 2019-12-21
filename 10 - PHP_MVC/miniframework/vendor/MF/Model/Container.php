<?php

	namespace MF\Model;

	use App\Connection;

	class Container {

		public static function getModel($model) {

			//Instância da Conexão
			$class = "\\App\\Models\\".ucfirst($model);
			$conn = Connection::getDb();

			return new $class($conn);

		}

	}


?>