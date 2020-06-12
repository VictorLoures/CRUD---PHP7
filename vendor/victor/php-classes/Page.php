<?php

namespace victor;
use \Rain\Tpl;

class Page 
{

	private $tpl;

	public function __construct($tpl_dir = "/views/"){

		$config = array(
			"tpl_dir"       => $_SERVER["DOCUMENT_ROOT"].$tpl_dir,
			"cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/viwes-cache/",
			"debug"         => false
		   );

		Tpl::configure( $config );

		$this->tpl = new Tpl;
	}

	private function setData($data = array()){
		foreach ($data as $chave => $value) {
			$this->tpl->assign($chave, $value);
			//Percorre o data e manda para o tpl;
			//Assign sao a variavel e o valor no tpl;
		}
	}


	public function pagina($pagina, $dados = array(), $returnHTML = false){
		$this->setData($dados);

		return $this->tpl->draw($pagina, $returnHTML);
		

	}


	


}


?>