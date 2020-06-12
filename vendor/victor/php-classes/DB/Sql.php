<?php

namespace victor\DB;

class Sql 
{

	private $conn;

	public function __construct(){

		$this->conn = new \PDO("mysql:host=localhost;dbname=db_estoque", "root", "root");

	}

	private function setParams($statement, $parameters = array())
	{

		foreach ($parameters as $key => $value) {
		//percorre o array com os dados
			
			$this->bindParam($statement, $key, $value);
			//chama o metodo bind para enviar para o bd

		}

	}

	private function bindParam($statement, $key, $value)
	{

		$statement->bindParam($key, $value);
		//envia para o banco de dados uma chave e um valor

	}

	public function query($rawQuery, $params = array())
	{

		$stmt = $this->conn->prepare($rawQuery);
		//executa um comando no banco de dados
		
		$this->setParams($stmt, $params);
		//passa os valores para o setParams

		$stmt->execute($params);

	}

	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->conn->prepare($rawQuery);
		//executa um comando no banco de dados

		$this->setParams($stmt, $params);
		//passa os valores para o setParams

		$stmt->execute();

		return $stmt->fetchAll();
		//retorna um array com os dados
		

	}

}

?>