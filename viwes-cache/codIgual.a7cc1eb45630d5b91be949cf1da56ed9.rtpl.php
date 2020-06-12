<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Controle de Estoque</title>
	<link rel="stylesheet" href="../site/css/cadastar.css" />
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
</head>
<body id="cor">
	<div class="container">
		<div class="row">
			<div class="col-md-12" id="stilos">
				<?php $counter1=-1;  if( isset($dados) && ( is_array($dados) || $dados instanceof Traversable ) && sizeof($dados) ) foreach( $dados as $key1 => $value1 ){ $counter1++; ?>
				<form action="/home" method="POST">
				<p id="titulo1">Código já existente!!</p><br>
				
				<p id="titulo1">Sugestão de Código: <?php echo htmlspecialchars( $cod, ENT_COMPAT, 'UTF-8', FALSE ); ?></p><br>
				
				<p id="titulo">Dados</p>
				<input type="text" name="nomeProduto" id="nomeProduto" placeholder="Nome" value="<?php echo htmlspecialchars( $value1["nomeProduto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><br>
				<input type="number" name="qteProduto" id="qteProduto" placeholder="Quantidade" value="<?php echo htmlspecialchars( $value1["qteProduto"] , ENT_COMPAT, 'UTF-8', FALSE ); ?>"><br>
				<input type="date" name="dtCadastro" id="dataCadastro" placeholder="Data de Cadastro"value="<?php echo htmlspecialchars( $value1["dtCadastro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><br>
				<input type="text" name="codigo" id="cod" placeholder="Código"><br>
				<input type="text" name="valor" id="preço" placeholder="Preço" value="<?php echo htmlspecialchars( $value1["valor"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><br>
				
				
				
				<input type="submit" id="botoes" class="btn-primary" value="Cadastrar"><a href="/home/produtos" id="botao"></a>
			</form>
			<?php } ?>
			</div>
		</div>
	</div>
	
	
</body>
</html>