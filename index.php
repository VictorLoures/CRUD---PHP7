<?php


require_once("vendor/autoload.php");

Use Slim\Slim;
use \victor\DB\Sql;
use \victor\Page;
use \victor\Cadastrar;
use \victor\Consultar;
use \victor\Excluir;
use \victor\Editar;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
	
	$page = new Page();

	$page->pagina($pagina = "newHome");
	
	

});


$app->get('/home', function() {
    
	$page = new Page();

	$page->pagina($pagina = "newHome");

});

$app->get('/home/cadastro', function() {
    
	$page = new Page();
	

	$page->pagina($pagina = "cadastrar");

});

$app->get('/home/produtos', function() {
    
	$page = new Page();

	$cad = new Consultar();
	
	$cad = Consultar::consulta();

	$page->pagina($pagina = "index", array(
		"cad"=>$cad
	));

});


$app->get('/home/editar/:nome', function($nome) {

	$mudar = $nome;

	$sel = new Consultar;
	$sel = Consultar::consultaEdit($nome);


	$page = new Page();

	$page->pagina($pagina = "newEditar", array(
		'sel' => $sel
	));
	exit;

});


$app->get('/home/excluir', function() {
    
	$page = new Page();

	$page->pagina($pagina = "excluir");

});

$app->post('/home', function() { 

	$conn = new Sql();
	$page = new Page();
	$cond = false;
	$dados = array($_POST);

	$results = $conn->select("SELECT cod FROM tb_produtos ORDER BY ordCod");
	//var_dump($results);
	
	foreach ($results as $key => $value) {
		if($_POST['codigo'] == $value['cod']){
			$_POST['codigo']++;
			$cond = true;
		}			
	}

	if($cond === true){
		$page->pagina($pagina = "codIgual", array(
			'cod'=>$_POST['codigo'],
			'dados'=>$dados
		));
		exit;
	}

	foreach ($results as $key => $value) {
		if($_POST['codigo'] != $value['cod']){
			$cad = new Cadastrar();
			$cad->cadastra();
			$cond = false;
			header("Location: /home");
			exit;
		}
	}
	

	

});


$app->get('/home/codIgual', function() {
    
	$page = new Page();

	$page->pagina($pagina = "excluir");

});


$app->post('/home/consulta', function() {    

	$page = new Page();
	$cad = new Consultar();

	$cad->consulta();	

	//var_dump($cad);

	$page->pagina($pagina = "index", array(
		"cad"=>$cad
	));


	
	

});

$app->get('/home/deletar/:nome', function($nome) {
    
	$del = new Excluir();

	$excluir = $nome;

	$del->excluir($excluir);

	header("Location: /home/excluir");
	exit;
	
});

$app->post('/home/mudar', function() {
	
	
	$del = new Editar();

	$del->mudar($_POST);
	header("Location: /home");
	exit;
});

$app->get('/home/nome', function() {
	
	$page = new Page();
	$cad = new Consultar();

	$cad = Consultar::consultaNome();

	$page->pagina($pagina = "index", array(
		"cad"=>$cad
	));
	
});

$app->get('/home/cod', function() {
	
	$page = new Page();
	$cad = new Consultar();

	$cad = Consultar::consultaCod();
	

	$page->pagina($pagina = "indexCod", array(
		"cad"=>$cad
	));
	
});

$app->get('/home/darBaixa/:cod', function($cod) {
	
	$page = new Page();
	$cad = new Consultar();

	$cad = Consultar::consultaBaixa($cod);

	$page->pagina($pagina = "darBaixa", array(
		"cad"=>$cad
	));
	
});


$app->post('/home/confirmarBaixa/:nome,:qte,:dtCadastro,:cod,:preco', function($nome,$qte,$dtCadastro,$cod,$preco) {
	
	//$confirm = new Consultar();

	//$confirm = Consultar::confirmaBaixa($nome);

	$num = $_POST['qteProduto'];
	$nomeId = $nome;

	$results =($qte) - ($num);

	$edit = new Editar();

	$edit->darBaixa($nomeId,$nome,$results,$cod,$dtCadastro,$preco);

	header('Location: /home');
	exit;

	
	
});


$app->run();

//foi usado o rain tpl para a renderização das paginas, slim framework para as rotas

?>



