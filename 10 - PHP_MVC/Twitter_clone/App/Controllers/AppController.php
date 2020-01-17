<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action {

	public function timeline() {

		$this->validaAutenticacao();

		$tweet = Container::getModel('Tweet');
		$tweet->__set('id_usuarios', $_SESSION['id']);
		$this->viwe->tweets = $tweet->getAll();

		$this->render('timeline');
	}

	public function tweet() {

		$this->validaAutenticacao();

		$tweet = Container::getModel('Tweet');

		$tweet->__set('tweet', $_POST['tweet']);
		$tweet->__set('id_usuarios', $_SESSION['id']);

		$tweet->salvar();

		header('Location: /timeline');

		
	}

	public function validaAutenticacao() {

		session_start();

		if(!isset($_SESSION['id']) || $_SESSION['id'] == '' || !isset($_SESSION['nome']) || $_SESSION['nome'] == '') {
			header('Location: /?login=erro');
		}

		
	}

	public function quemSeguir() {

		$this->validaAutenticacao();

		$pesquisar = isset($_GET['pesquisar']) ? $_GET['pesquisar'] : '';
		echo '<br><br><br><br>';
		echo 'Pesquisando por '.$pesquisar;

		$usuarios = array();

		if($pesquisar != '') {

			$usuario = Container::getModel('Usuario');
			$usuario->__set('nome', $pesquisar);
			$usuarios = $usuario->getAll();


			echo'<pre>';
			print_r($usuarios);
			echo'</pre>';
		}

		$this->view->usuarios = $usuarios;

		$this->render('quemSeguir');

	}

}


?>