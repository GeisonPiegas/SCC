<?php
//---------------------------------
//     LOJAS REFERÊNTES
// loja1 - Santa Clara Matriz
// loja2 - Santa Clara Filial
// loja4 - Only You | Up
//---------------------------------


class Lista extends MY_Controller{

	public function __construct() {
		//REFERÊNCIA O MODELO E O CONTROLE
		parent::__construct();
		$this->load->model('Produto_modelo');
		$this->load->library('pagination');
	}

// ===========================================================================================================================

	// LISTA TODAS AS MARCAS DE DETERMINADA LOJA
    function listaMarcas($loja){
		$dados['loja'] = $this->Produto_modelo->buscaPorLoja($loja);
		$dados['marcas'] = $this->Produto_modelo->buscaMarcas($loja);
		$dados['idLoja'] = $loja;
		$this->load->helper('url');
		$this->load->view('lojas/list_marcas', $dados);

	}

// ===========================================================================================================================

	// LISTA TODOS OS PRODUTO DE DETERMINADA MARCA POR DETERMINADA LOJA POR ORDEM DE DATA.
	function listProductsMarca($loja, $codmarca, $segment = 0){
		$dados['loja'] = $this->Produto_modelo->buscaPorLoja($loja);
		$dados['codmarca'] = $codmarca;
		$dados['idLoja'] = $loja;
		$dados['categorias'] = $this->Produto_modelo->searchCategorias();
		$quant = $this->Produto_modelo->buscaProductsMarcaQuant($loja, $codmarca);
		$maximo = 12;


		$config['base_url'] = base_url('listProdutosMarca/'.$loja."/".$codmarca);
		$config['uri_segment'] = 4;
		$config['total_rows'] = $quant;
		$config['per_page'] = $maximo;
 		$config['first_link'] = FALSE;
 		$config['last_link'] = FALSE;
 		$config['next_link'] = 'Próximo';
		$config['prev_link'] = 'Anterior';
		$config['full_tag_open'] = "<div class='pagination flex-m flex-w p-t-26'>";
		$config['full_tag_close'] = "</div>";
		$config['cur_tag_open'] = "<a href='' class='item-pagination flex-c-m trans-0-4 active-pagination'>";
		$config['cur_tag_close'] = "</a>";
		$config['num_tag_open'] = "<div class='item-pagination flex-c-m trans-0-4'>";
		$config['num_tag_close'] = "</div>";

		$this->pagination->initialize($config);
		
		$dados["paginacao"] = $this->pagination->create_links();
		
		$offset = $segment;
		
		$dados["products"] = $this->Produto_modelo->buscaProductsMarca($loja, $codmarca, $config['per_page'], $offset);  
	    $this->load->view('lojas/list_products', $dados);
	}


// ===========================================================================================================================

	// LISTA PRODUTOS DE DETERMINADA LOJA POR DETERMINADA CATEGORIA POR ORDEM DE DATA.
	function listProductsCategoria($loja, $codcategoria, $segment = 0){
		$dados['loja'] = $this->Produto_modelo->buscaPorLoja($loja);
		$dados['idLoja'] = $loja;
		$dados['categorias'] = $this->Produto_modelo->searchCategorias();
		$quant = $this->Produto_modelo->buscaProductsCategoriaQuant($loja, $codcategoria);
		$maximo = 12;

		$config['base_url'] = base_url('listTodosCategoria/'.$loja."/".$codcategoria);
		$config['uri_segment'] = 4;
		$config['total_rows'] = $quant;
		$config['per_page'] = $maximo;
 		$config['first_link'] = FALSE;
 		$config['last_link'] = FALSE;
 		$config['next_link'] = 'Próximo';
		$config['prev_link'] = 'Anterior';
		$config['full_tag_open'] = "<div class='pagination flex-m flex-w p-t-26'>";
		$config['full_tag_close'] = "</div>";
		$config['cur_tag_open'] = "<a href='' class='item-pagination flex-c-m trans-0-4 active-pagination'>";
		$config['cur_tag_close'] = "</a>";
		$config['num_tag_open'] = "<div class='item-pagination flex-c-m trans-0-4'>";
		$config['num_tag_close'] = "</div>";

		$this->pagination->initialize($config);
		
		$dados["paginacao"] = $this->pagination->create_links();
		
		$offset = $segment;
		
		$dados["products"] = $this->Produto_modelo->buscaProductsCategoria($loja, $codcategoria, $config['per_page'], $offset);  
	    $this->load->view('lojas/list_products', $dados);
	}

// ===========================================================================================================================

	// LISTA PRODUTOS DE DETERMINADA LOJA POR DETERMINADA MARCA E CATEGORIA POR ORDEM DE DATA.
	function listProductsMarcaCategoria($loja, $codmarca, $codcategoria, $segment = 0){
		$dados['loja'] = $this->Produto_modelo->buscaPorLoja($loja);
		$dados['codmarca'] = $codmarca;
		$dados['idLoja'] = $loja;
		$dados['categorias'] = $this->Produto_modelo->searchCategorias();
		$quant = $this->Produto_modelo->buscaProductsMarcaCategoriaQuant($loja, $codmarca, $codcategoria);
		$maximo = 12;

		$config['base_url'] = base_url('listMarcaNivel/'.$loja."/".$codmarca."/".$codcategoria);
		$config['uri_segment'] = 5;
		$config['total_rows'] = $quant;
		$config['per_page'] = $maximo;
 		$config['first_link'] = FALSE;
 		$config['last_link'] = FALSE;
 		$config['next_link'] = 'Próximo';
		$config['prev_link'] = 'Anterior';
		$config['full_tag_open'] = "<div class='pagination flex-m flex-w p-t-26'>";
		$config['full_tag_close'] = "</div>";
		$config['cur_tag_open'] = "<a href='' class='item-pagination flex-c-m trans-0-4 active-pagination'>";
		$config['cur_tag_close'] = "</a>";
		$config['num_tag_open'] = "<div class='item-pagination flex-c-m trans-0-4'>";
		$config['num_tag_close'] = "</div>";

		$this->pagination->initialize($config);
		
		$dados["paginacao"] = $this->pagination->create_links();
		
		$offset = $segment;
		
		$dados["products"] = $this->Produto_modelo->buscaProductsMarcaCategoria($loja, $codmarca, $codcategoria, $config['per_page'], $offset);  
	    $this->load->view('lojas/list_products', $dados);
	}


// ===========================================================================================================================

	// LISTA TODOS OS PRODUTOS DE DETERMINADA LOJA POR ORDEM DE DATA
	function retornaLista($loja, $segment = 0){
		
		$dados['loja'] = $this->Produto_modelo->buscaPorLoja($loja);
		$quant = $this->Produto_modelo->buscaProductsQuant($loja);
		$dados['idLoja'] = $loja;
		$dados['categorias'] = $this->Produto_modelo->searchCategorias();

		$maximo = 12;
		$config['base_url'] = base_url('listProdutos/'.$loja);
		$config['total_rows'] = $quant;
		$config['per_page'] = $maximo;
 		$config['first_link'] = FALSE;
 		$config['last_link'] = FALSE;
 		$config['next_link'] = 'Próximo';
		$config['prev_link'] = 'Anterior';
		$config['full_tag_open'] = "<div class='pagination flex-m flex-w p-t-26'>";
		$config['full_tag_close'] = "</div>";
		$config['cur_tag_open'] = "<a href='' class='item-pagination flex-c-m trans-0-4 active-pagination'>";
		$config['cur_tag_close'] = "</a>";
		$config['num_tag_open'] = "<div class='item-pagination flex-c-m trans-0-4'>";
		$config['num_tag_close'] = "</div>";

		$this->pagination->initialize($config);
		
		$dados["paginacao"] = $this->pagination->create_links();
		
			$offset = $segment;
		
		$dados["products"] = $this->Produto_modelo->buscaProducts($loja,$config['per_page'],$offset);
	    $this->load->view('lojas/list_products', $dados);

	}

	// ===========================================================================================================================

	// LISTA PRODUTOS DE DETERMINADA LOJA POR PESQUISA.
	function listProductsSearch($loja, $segment = 0){
		$termo = strtoupper($this->input->post('search'));
		$dados['loja'] = $this->Produto_modelo->buscaPorLoja($loja);
		$dados['idLoja'] = $loja;
		$dados['categorias'] = $this->Produto_modelo->searchCategorias();
		
		/*
		$quant = $this->Produto_modelo->buscaProductsSearchQuant($loja, $termo);
		
		
		
		$maximo = 12;

		$config['base_url'] = base_url('listTodaPesquisa/'.$loja);
		$config['uri_segment'] = 3;
		$config['total_rows'] = $quant;
		$config['per_page'] = $maximo;
 		$config['first_link'] = FALSE;
 		$config['last_link'] = FALSE;
 		$config['next_link'] = 'Próximo';
		$config['prev_link'] = 'Anterior';
		$config['full_tag_open'] = "<div class='pagination flex-m flex-w p-t-26'>";
		$config['full_tag_close'] = "</div>";
		$config['cur_tag_open'] = "<a href='' class='item-pagination flex-c-m trans-0-4 active-pagination'>";
		$config['cur_tag_close'] = "</a>";
		$config['num_tag_open'] = "<div class='item-pagination flex-c-m trans-0-4'>";
		$config['num_tag_close'] = "</div>";

		$this->pagination->initialize($config);
		
		$dados["paginacao"] = $this->pagination->create_links();
		
		$offset = $segment;
		*/

		$dados["paginacao"] = '';
		$dados["products"] = $this->Produto_modelo->buscaProductsSearch($loja, $termo);  
	    $this->load->view('lojas/list_products', $dados);
	}
}
