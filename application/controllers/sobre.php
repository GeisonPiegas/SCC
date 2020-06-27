<?php
//---------------------------------
//     LOJAS REFERÊNTES
// loja1 - Santa Clara Matriz
// loja2 - Santa Clara Filial
// loja4 - Only You | Up
//---------------------------------


class Sobre extends MY_Controller{
	public function __construct() {
		//REFERÊNCIA O MODELO E O CONTROLE
		parent::__construct();
		$this->load->model('Produto_modelo');
	}

    function contatos($loja){

		$dados['loja'] = $this->Produto_modelo->buscaPorLoja($loja);
		$dados['idLoja'] = $loja;
		$this->load->helper('url');
		$this->load->view('lojas/contact', $dados);
    }

	function sobre($loja){

		$dados['loja'] = $this->Produto_modelo->buscaPorLoja($loja);
		$dados['idLoja'] = $loja;
		$this->load->helper('url');
		$this->load->view('lojas/about', $dados);
    }
}