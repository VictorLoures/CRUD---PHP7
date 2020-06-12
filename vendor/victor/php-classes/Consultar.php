<?php

namespace victor;
use \victor\DB\Sql;

class Consultar
{
	private $nome;
	private $conn;
	private $results;
	private $funcao;


	public static function consulta(){
		
		$nome = $_GET['nomeId'];
		

		$conn = new Sql();

		return $conn->select("SELECT *, DATE_FORMAT( dtCadastro, '%d/%m/%Y' ) AS dataa FROM tb_produtos WHERE nome = :NOME or cod = :NOME", array(
			":NOME"=>$nome,
			":NOME"=>$nome
		));



	}

	public static function consultaNome(){
		$conn = new Sql();

		return $conn->select("SELECT *, DATE_FORMAT( dtCadastro, '%d/%m/%Y' ) AS dataa FROM tb_produtos ORDER BY nome ;");
		// esse comando sql pega a dta no campo dtCadastro e cria um novo campo na tabela (dataa) e cadastra a data do jeito br;
		

	}



	public static function consultaCod(){
		$conn = new Sql();

		$results =  $conn->select("SELECT *, DATE_FORMAT( dtCadastro, '%d/%m/%Y' ) AS dataa FROM tb_produtos ORDER BY ordCod ;");

		//var_dump($dia);
		return $results;
		

	}

	public static function consultaEdit($nome){

		
		$conn = new Sql();

		return $conn->select("SELECT * FROM tb_produtos WHERE nome =  :NOME", array(
			':NOME'=>$nome
		));
	}

	
	public static function consultaBaixa($cod){
		$conn = new Sql();

		return $conn->select("SELECT * FROM tb_produtos WHERE cod = :COD", array(
			':COD'=>$cod
		));
		

	}

	public static function confirmaBaixa($nome){
		$conn = new Sql();

		$results = $conn->select("SELECT qte FROM tb_produtos WHERE nome = :NOME", array(
			':NOME'=>$nome
		));

		return $results;
	}

	public static function consultaCodIgual($id){
		return $oi =  "ok";
	}

	public static function codIgual(){
		$conn = new Sql();
		//var_dump($_POST['codigo']);
		$cont= $_POST["codigo"];
		$results = $conn->select("SELECT ordCod FROM tb_produtos");

		foreach ($results as $row) {
			foreach ($row as $value) {
				$values = array('cod' => $value 
			);
				
			}
		}

		var_dump($values);

		return $cont;
	}
	




}





?>

