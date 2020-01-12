<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class AuthController extends Action {

	public function autenticar() {

		echo '<pre>';
		print_r($_POST);
		echo '</pre><hr>';

		$usuario = Container::getModel('Usuario');

		$usuario->__set('email', $_POST['email']);
		$usuario->__set('senha', $_POST['senha']);

		$retorno = $usuario->autenticar();

		if($usuario->__get('id') != '' && $usuario->__get('nome') != '') {
			echo 'Autenticado';
		} else {

			$this->view->erroLogin = true;
			
			$this->render('index');
		}

	}

}


?>