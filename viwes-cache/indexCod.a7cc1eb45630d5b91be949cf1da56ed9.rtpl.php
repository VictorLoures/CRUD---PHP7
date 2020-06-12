<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Controle de Estoque</title>
	<link rel="stylesheet" href="../site/css/estoque.css" />
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
</head>
<body id="cor">
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<table>
						<tr>
							<td id="nomeUsuario">Usuário: </td><td id="nomeUsuario"></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</header>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<table>
							<tr>
								<td id="nomeProduto">Código</td>
								<td id="qteEstoque">Nome do Produto</td>
								<td id="cod">Quantida em Estoque </td>
								<td id="dtCadastro">Data de Cadastro </td>
								<td id="preço">Preço </td>
								<td id="valorTotal">Valor Total </td>
							</tr>
						<tbody>
							<?php $counter1=-1;  if( isset($cad) && ( is_array($cad) || $cad instanceof Traversable ) && sizeof($cad) ) foreach( $cad as $key1 => $value1 ){ $counter1++; ?>	
							<tr>
															
								<td id="nomeProduto"><?php echo htmlspecialchars( $value1["cod"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></td>
								<td id="qteEstoque"><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
								<td id="cod"><?php echo htmlspecialchars( $value1["qte"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
								<td id="dtCadastro"><?php echo htmlspecialchars( $value1["dataa"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
								<td id="preço">R$<?php echo htmlspecialchars( $value1["preco"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
								<td id="valorTotal">R$<?php echo htmlspecialchars( $value1["valorTotal"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
								<td></td>
								<td id="edit-delet">
									<a href="/home/deletar/<?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="corDel"  onclick="return confirm('Deseja realmente excluir este registro?')">Excluir</a>
								</td>
								<td id="edit-edit">
									<a href="/home/editar/<?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="corEd"  > Editar</a>									
								</td>
								<td id="edit-darBaixa">
									<a href="/home/darBaixa/<?php echo htmlspecialchars( $value1["cod"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="corBaixa" > Dar Baixa</a>
								</td>							
								
							</tr>
							<?php } ?>
							
							
						</tbody>
					</table>
										
				</div>
				
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<button class="btn-success" id="botoes"><a id="botao" href="/home">Voltar ao Início</a></button>
				</div>
			</div>
		</div>
		
	</section>

	<footer>
		<div class="container">
			<div class="row" >
				<div class="col-md-12">
					<p id ="nomeEmpresa">&copy;VL Digital</p>
				</div>
			</div>
		</div>
	</footer>

	
</body>
</html>