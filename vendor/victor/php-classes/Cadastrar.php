<?php

namespace victor;
use \victor\DB\Sql;

class Cadastrar
{
	private $dados = array();
	private $nome;
	private $qte;
	private $cod;
	private $ordCod;
	private $dtCadastro;
	private $preco;
	private $valorTotal;

	public function cadastra(){

		$conn = new Sql();

		$this->nome = $_POST['nomeProduto'];
		$this->qte = $_POST['qteProduto'];
		$this->cod = $_POST['codigo'];
		$this->ordCod = $this->cod;
		$this->dtCadastro = $_POST['dtCadastro'];
		$this->preco = $_POST['valor'];
		$this->valorTotal = ($this->qte * $this->preco);

		//echo $this->cod;

		
		
		

		 $conn->query("INSERT INTO tb_produtos VALUES(:NOME, :QTE, :COD, :ORDCOD, :DTCADASTRO, :PRECO, :VALORTOTAL)", array(
		 	':NOME'=>$this->nome,
		 	':QTE'=> $this->qte,
		 	':COD' => $this->cod,
		 	':ORDCOD'=>$this->ordCod,
		 	':DTCADASTRO' => $this->dtCadastro,
		 	':PRECO'=> $this->preco,
			':VALORTOTAL'=>$this->valorTotal
		 ));
	}

	//select or



}
