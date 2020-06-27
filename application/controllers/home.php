<?php
//---------------------------------
//     LOJAS REFERÊNTES
// loja1 - Santa Clara Matriz
// loja2 - Santa Clara Filial
// loja4 - Only You | Up
//---------------------------------


class Home extends MY_Controller{
	public function __construct() {
		//REFERÊNCIA O MODELO E O CONTROLE
		parent::__construct();
		$this->load->model('Produto_modelo');
	}

    function loja1(){
		
		$dados['products'] = $this->Produto_modelo->buscaProductsNew(1);
		$dados['banners'] = $this->Produto_modelo->buscaBanners(1);
		$dados['loja'] = $this->Produto_modelo->buscaPorLoja(1);
		$dados['idLoja'] = 1;
		$this->load->helper('url');
		$this->load->view('lojas/home', $dados);
    }

	function loja2(){
		
		$dados['products'] = $this->Produto_modelo->buscaProductsNew(2);
		$dados['banners'] = $this->Produto_modelo->buscaBanners(2);
		$dados['loja'] = $this->Produto_modelo->buscaPorLoja(2);
		$dados['idLoja'] = 2;
		$this->load->helper('url');
		$this->load->view('lojas/home', $dados);
	}

	function loja4(){
		$dados['products'] = $this->Produto_modelo->buscaProductsNew(4);
		$dados['banners'] = $this->Produto_modelo->buscaBanners(4);
		$dados['loja'] = $this->Produto_modelo->buscaPorLoja(4);
		$dados['idLoja'] = 4;
		$this->load->helper('url');
		$this->load->view('lojas/home', $dados);
	}

}
