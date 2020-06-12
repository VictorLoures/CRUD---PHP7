<?php

namespace victor;
use \victor\DB\Sql;

class Editar
{
	private $nomeId;
	private $nome;
	private $qte;
	private $cod;
	private $ordCod;
	private $dtCadastro;
	private $preco;
	private $valorTotal;

	public function mudar(){

		//$conn = new \PDO("mysql:host=localhost;dbname=db_estoque", "root", "root");

		//$stmt = $conn->prepare("UPDATE tb_produtos SET nome = :NOME, qte = :QTE, cod = :COD, dtCadastro = :DTCADASTRO, preco = :PRECO, valorTotal = :VALORTOTAL WHERE nome = :NOMEID OR cod = :NOMEID ");

		$this->nomeId = $_POST['nomeId'];
		$this->nome = $_POST['nomeProduto'];
		$this->qte = $_POST['qteProduto'];
		$this->cod = $_POST['cod'];
		$this->ordCod = $this->cod;
		$this->dtCadastro = $_POST['dtCadastro'];
		$this->preco = (100 * $_POST['valor']);
		$this->valorTotal = ($this->qte * $this->preco);


		//$stmt->bindParam(":NOME", $this->nome);
		//$stmt->bindParam(":QTE", $this->qte);
		//$stmt->bindParam(":COD", $this->cod);
		//$stmt->bindParam(":DTCADASTRO", $this->dtCadastro);
		//$stmt->bindParam(":PRECO", $this->preco);
		//$stmt->bindParam(":VALORTOTAL", $this->valorTotal);
		//$stmt->bindParam(":NOMEID", $this->nomeId);

		//$stmt->execute();


		$conn = new Sql();

		$stmt = $conn->query("UPDATE tb_produtos SET nome = :NOME, qte = :QTE, cod = :COD, ordCod = :ORDCOD, dtCadastro = :DTCADASTRO, preco = :PRECO, valorTotal = :VALORTOTAL WHERE nome = :NOMEID OR cod = :NOMEID ", array(
			':NOMEID'=>$this->nomeId,
			':NOME'=>$this->nome,
			':QTE'=> $this->qte,
			':COD' => $this->cod,
			':ORDCOD'=>$this->ordCod,
			':DTCADASTRO' => $this->dtCadastro,
			':PRECO'=> $this->preco,
			':VALORTOTAL'=>$this->valorTotal
		));
	}

	public function darBaixa($nomeIdb,$nomeb,$qteb,$codb,$dtCadastrob,$valorb){

		//$conn = new \PDO("mysql:host=localhost;dbname=db_estoque", "root", "root");

		//$stmt = $conn->prepare("UPDATE tb_produtos SET nome = :NOME, qte = :QTE, cod = :COD, dtCadastro = :DTCADASTRO, preco = :PRECO, valorTotal = :VALORTOTAL WHERE nome = :NOMEID OR cod = :NOMEID ");

		$this->nomeId = $nomeIdb;
		$this->nome = $nomeb;
		$this->qte = $qteb;
		$this->cod = $codb;
		$this->ordCod = $this->cod;
		$this->dtCadastro = $dtCadastrob;
		$this->preco = $valorb;
		$this->valorTotal = ($this->qte * $this->preco);

		//var_dump($this->nomeId);
		//var_dump($this->nome);
		//var_dump($this->qte);
		//var_dump($this->cod);
		//var_dump($this->dtCadastro);
		//var_dump($this->preco);
		//var_dump($this->valorTotal);


		//$stmt->bindParam(":NOME", $this->nome);
		//$stmt->bindParam(":QTE", $this->qte);
		//$stmt->bindParam(":COD", $this->cod);
		//$stmt->bindParam(":DTCADASTRO", $this->dtCadastro);
		//$stmt->bindParam(":PRECO", $this->preco);
		//$stmt->bindParam(":VALORTOTAL", $this->valorTotal);
		//$stmt->bindParam(":NOMEID", $this->nomeId);

		//$stmt->execute();


		$conn = new Sql();

		$stmt = $conn->query("UPDATE tb_produtos SET nome = :NOME, qte = :QTE, cod = :COD, ordCod = :ORDCOD, dtCadastro = :DTCADASTRO, preco = :PRECO, valorTotal = :VALORTOTAL WHERE nome = :NOMEID OR cod = :NOMEID ", array(
			':NOMEID'=>$this->nomeId,
			':NOME'=>$this->nome,
			':QTE'=> $this->qte,
			':COD' => $this->cod,
			':ORDCOD'=>$this->ordCod,
			':DTCADASTRO' => $this->dtCadastro,
			':PRECO'=> $this->preco,
			':VALORTOTAL'=>$this->valorTotal
		));
	} 




}




?>