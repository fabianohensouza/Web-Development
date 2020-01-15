<?php

namespace App\Models;

use MF\Model\Model;

class Tweet extends Model {

	private $id;
	private $id_usuarios;
	private $tweet;
	private $data;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
	}

	//Salvar
	public function salvar() {

		$query = "insert into tweets(id_usuarios, tweet)values(:id_usuarios, :tweet)";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':id_usuarios', $this->__get('id_usuarios'));
		$stmt->bindValue(':tweet', $this->__get('tweet'));
		$stmt->execute();

		return $this;
	}

	//Recuperar usuário por e-mail
	public function getUsuarioPorEmail() {
		$query = "select nome, email from usuarios where email = :email";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':email', $this->__get('email'));
		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);

	}

}

?>