<?php

	//Creating the class Dashboard
	
	class Dashboard {
		
		public $data_inicio;
		public $data_fim;
		public $numeroVendas;
		public $totalVendas;

		public function __get( $attr ) {
			return $this->$attr;
		}

		public function __set( $attr, $value ) {
			$this->$attr = $value;
			return $this;
		}
	}

	//DB Connection Class

	class Conexao {

		private $host = 'localhost';
		private $dbname = 'dashboard';
		private $user = 'root';
		private $pass = '';

		public function connect() {

			try {

				$conexao = new PDO(

					"mysql:host=$this->host;dbname=$this->dbname",
					"$this->user",
					"$this->pass"	

				);

				$conexao->exec('set charset set utf8');

				return $conexao;

			} catch (PDOException $e) {
				echo '<p>' . $e->getMessage() . '/<p>';
			}
		}
	}

	class Bd {

		private $conexao;
		private $dashboard;

		public function __construct(Conexao $conexao, Dashboard $dashboard) {
			$this->conexao = $conexao->connect();
			$this->dashboard = $dashboard;

		}

		public function getNumeroVendas() {
			$query = 'select 
						count(*) as numero_vendas 
					  from 
					  	tb_vendas 
					  where 
					  	data_venda between :data_inicio and :data_fim';

			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
			$stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
			$stmt->execute();

			return $stmt->fetch(PDO::FETCH_OBJ)->numero_vendas;
		}

		public function getTotalVendas() {
			$query = 'select 
						sum(total) as total_vendas 
					  from 
					  	tb_vendas 
					  where 
					  	data_venda between :data_inicio and :data_fim';

			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
			$stmt->bindValue(':data_fim', $this->dashboard->__get('data_fim'));
			$stmt->execute();

			return $stmt->fetch(PDO::FETCH_OBJ)->total_vendas;
		}
	}

	$conexao = new Conexao();
	$dashboard = new Dashboard();

	$competencia = explode('-', $_GET['competencia']);
	$ano = $competencia[0];
	$mes = $competencia[1];

	$dia_mes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);

	$data_inicio = $_GET['competencia'] . '-01';
	$data_fim = $_GET['competencia'] . '-' . $dia_mes;


	$dashboard->__set('data_inicio', $data_inicio);
	$dashboard->__set('data_fim', $data_fim);

	$bd = new Bd($conexao, $dashboard);

	$dashboard->__set('numeroVendas', $bd->getNumeroVendas());
	$dashboard->__set('totalVendas', $bd->getTotalVendas());
	echo json_encode($dashboard);

?>