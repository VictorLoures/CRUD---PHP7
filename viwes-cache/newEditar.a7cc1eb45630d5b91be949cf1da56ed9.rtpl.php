<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Controle de Estoque</title>
	<link rel="stylesheet" href="../site/css/editar.css" />
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
</head>
<body id="cor">
	<div class="container">
		<div class="row">
		
			<div class="col-md-12" id="stilos">
				<form action="/home/mudar" method="POST">
				<?php $counter1=-1;  if( isset($sel) && ( is_array($sel) || $sel instanceof Traversable ) && sizeof($sel) ) foreach( $sel as $key1 => $value1 ){ $counter1++; ?>
				<p id="titulo">Dados</p>
				<input type="text" name="nomeId" id="nomeId" value="<?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Nome"><br>
				 <input type="text" name="nomeProduto" id="nomeProduto" value="<?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Nome"><br>
				 <input type="number" name="qteProduto" id="qteProduto" value="<?php echo htmlspecialchars( $value1["qte"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Quantidade"><br>
				   <input type="date" name="dtCadastro" id="dataCadastro" value="<?php echo htmlspecialchars( $value1["dtCadastro"], ENT_COMPAT, 'UTF-8', FALSE ); ?> "placeholder="Data de Cadastro"><br>
				 <input type="text" name="cod" id="cod" value="<?php echo htmlspecialchars( $value1["cod"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Código"><br>
				 <input type="text" name="valor" id="preço" value="<?php echo htmlspecialchars( $value1["preco"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Preço"><br>
				<input type="submit" id="botoes" class="btn-success" value="Editar"><a href="/home" id="botao"></a>
				<?php } ?>
				</form>
			</div>
		
		</div>
	</div>
	
	
</body>
</html>