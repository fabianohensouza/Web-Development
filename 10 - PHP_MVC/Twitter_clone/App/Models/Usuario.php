<?php

namespace App\Models;

use MF\Model\Model;

class Usuario extends Model {

	private $id;
	private $nome;
	private $email;
	private $senha;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
	}

	//Salvar
	public function salvar() {

		$query = "insert into usuarios(nome, email, senha)values(:nome, :email, :senha)";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':nome', $this->__get('nome'));
		$stmt->bindValue(':email', $this->__get('email'));
		$stmt->bindValue(':senha', $this->__get('senha')); //md5() -> hash 32car
		$stmt->execute();

		return $this;
	}

	//Validar cadastro
	public function validarCadastro() {
		$valido = true;

		if(strlen($this->__get('nome')) < 3 ) {
			$valido = false;
		}

		if(strlen($this->__get('email')) < 3 or strpos($this->__get('email'), '@') === false) {
		//if(strlen($this->__get('email')) < 3) {
			$valido = false;
		}

		if(strlen($this->__get('senha')) < 3 ) {
			$valido = false;
		}

		if( count($this->getUsuarioPorEmail()) != 0 ) {
			$valido = false;
		}

		return $valido;
	}

	//Recuperar usuário por e-mail
	public function getUsuarioPorEmail() {
		$query = "select nome, email from usuario where email = :email";
		$stmt = $stmt = $this->db->prepare($query);
		$stmt->bindValue(':email', $this->__get('email'));
		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);

	}

}

?>