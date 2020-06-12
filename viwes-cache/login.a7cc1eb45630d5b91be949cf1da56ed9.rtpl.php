<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Controle de Estoque</title>
	<link rel="stylesheet" href="../site/css/login.css" />
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6" id="entrar">
				<div id="entrarPosiçao">
					<form>
					<p id="titulo">Entrar</p>
						<input type="text" name="login" id="login" placeholder="E-mail/Cod"><br/>
						<input type="password" name="password" id="password" placeholder="Senha"><br/>
						<button class="btn-primary" id="botoes">Entrar</button>
					</form>
				</div>

			</div>
			<div class="col-md-6" id="entrar">
				<div id="entrarPosiçao">
					<form>
					<p id="titulo">É novo? Cadastre-se</p>
						<input type="text" name="novologin" id="login" placeholder="E-mail/Cod"><br/>
						<input type="password" name="novopassword" id="password" placeholder="Senha"><br/>
						<button class="btn-primary" id="botoes">Cadastrar</button>
					</form>
				</div>
	

			</div>
		</div>
	</div>
	
</body>
</html>