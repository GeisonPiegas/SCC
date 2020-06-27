<?php


class Detail extends MY_Controller{
	public function __construct() {
		//REFERÊNCIA O MODELO E O CONTROLE
		parent::__construct();
		$this->load->model('Produto_modelo');
	}

    function searchProduct($idLoja, $codempitem, $coditem){
		
		$dados['product'] = $this->Produto_modelo->searchProduct($codempitem, $coditem);
		foreach($dados['product'] as $res){ 
			$codmarca = $res->codmarca; 
		}
		$dados['loja'] = $this->Produto_modelo->buscaPorLoja($idLoja);
		$dados['relacionado'] = $this->Produto_modelo->searchRelated($idLoja, $codmarca, $codempitem, $coditem);
		$dados['grade'] = $this->Produto_modelo->searchQtdStock($idLoja, $codempitem, $coditem);
		$dados['idLoja'] = $idLoja;
		$this->load->helper('url');
		$this->load->view('lojas/product-detail', $dados);
    }

}
