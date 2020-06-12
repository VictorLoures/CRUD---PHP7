<?php

namespace victor;
use \victor\DB\Sql;

class Excluir
{
	private $nome;
	private $conn;


	public function excluir($excluir){
		
		$this->nome = $excluir;

		$conn = new Sql();

		$results = $conn->query("DELETE FROM tb_produtos WHERE nome = :NOME or cod = :NOME", array(
			":NOME"=>$this->nome,
			":NOME"=>$this->nome
		));

	}

	



}


?>