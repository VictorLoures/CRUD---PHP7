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
		<div class="row">
			<h1 id="titulo">Bem vindo(a)<span></span>!!!</h1>
			<div class="col-md-6" id="entrar">
				<form action="/home/produtos" method="GET">
				<p id="procurar">Consultar um Produto</p>
				<input type="text" id="nomeProduto" name="nomeId" placeholder="Nome\Cod">
				<input type="submit" value="Procurar" name ="procurar" class="btn-info" id="botoes" />
			</form>
		</div>
		<div class="col-md-6" id="entrar">
			<form action="/home/produtos" method="POST">
				<p id="btExcluirEdita">Excluir um Produto</p>
				<input type="text" id="nomeProdutoa" name="nomeId" placeholder="Nome\Cod">
				<input type="submit" value="Excluir" class="btn-danger" name="excluir" id="botoes" onclick="return confirm('Deseja realmente excluir este registro?')"><a id="botao" href="/home/excluir"></a><br>
			</form>
		</div>
		<div class="row">	
				
			<p id="cadastrarTitulo">Cadastrar/Editar um Produto</p>
			<button class="btn-primary" id="botoaCadastrar"><a id="botao" href="/home/cadastro">Cadastrar</a></button>
			<button class="btn-success" id="botoes"><a id="botao" href="/home/editar">Editar</a></button>
		</div>
			
			
		</div>
	</div>


	
	
</body>
</html>