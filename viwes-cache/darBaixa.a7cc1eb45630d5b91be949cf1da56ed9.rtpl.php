<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Controle de Estoque</title>
	<link rel="stylesheet" href="css/darBaixa.css" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
</head>
<body id="cor">
	<div class="container">
		<div class="row">
			<div class="col-md-12" id="stilos">
				<?php $counter1=-1;  if( isset($cad) && ( is_array($cad) || $cad instanceof Traversable ) && sizeof($cad) ) foreach( $cad as $key1 => $value1 ){ $counter1++; ?>
				<form action="/home/confirmarBaixa/<?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>,<?php echo htmlspecialchars( $value1["qte"], ENT_COMPAT, 'UTF-8', FALSE ); ?>,<?php echo htmlspecialchars( $value1["dtCadastro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>,<?php echo htmlspecialchars( $value1["cod"], ENT_COMPAT, 'UTF-8', FALSE ); ?>,<?php echo htmlspecialchars( $value1["preco"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="POST">
				<p id="titulo">Dados</p>
				<input type="text" name="nomeProduto" id="nomeProduto" placeholder="Nome" value="<?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><br>
				<input type="number" name="qteProduto" id="qteProduto" placeholder="Quantidade" ><br>				
				
				<input type="submit" id="botoes" class="btn-primary" value="Dar Baixa"><a href="/home/confirmarBaixa/<?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>,<?php echo htmlspecialchars( $value1["qte"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="botao"></a>
			</form>
			<?php } ?>
			</div>
		</div>
	</div>
	
	
</body>
</html>