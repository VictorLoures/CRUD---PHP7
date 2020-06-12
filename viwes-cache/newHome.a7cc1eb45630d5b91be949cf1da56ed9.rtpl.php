<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Controle de Estoque</title>
	<link rel="stylesheet" href="../site/css/home.css" />
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
</head>
<body id="cor">	

	<div class="container">
		<h1 id="titulo">Bem vindo(a)<span></span>!!!</h1>
		<div class="row">
			<div class="col-md-6" id="entrar">
				<form action="/home/produtos" method="GET">
				<p id="procurar">Consultar um Produto</p>
				<input type="text" id="nomeProduto" name="nomeId" placeholder="Nome\Cod">
				<input type="submit" value="Procurar" class="btn-info" id="botoes" />
			</form>
		</div>
		<div class="col-md-6" id="entrar">
			<form action="/home/deletar" method="POST">
				<p id="tabelaInteira">Procurar na Tabela Toda</p>
				<button class="btn-info" id="ordemAlfabetica"><a id="place" href="/home/nome">Ordem Alfabética</a></button>
				<button class="btn-info" id="ordemCod"><a id="place" href="/home/cod">Ordem Cod</a></button>
			</form>
		</div>	
			
		</div>
		<div class="row">	
				
			<p id="cadastrarTitulo">Cadastrar um Produto</p>
			<button class="btn-primary" id="botoaCadastrar"><a id="place" id="botao" href="/home/cadastro">Cadastrar</a></button>
		</div>
	</div>


	
	
</body>
</html>