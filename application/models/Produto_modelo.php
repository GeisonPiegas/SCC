<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Produto_modelo extends MY_Model{
    protected $dbsite;
    
    public function __construct(){
        parent::__construct('Home');

        $this->dbsite = $this->load->database('secundary', TRUE);
    }

// ===========================================================================================================================

    // BUSCA PRODUTOS MAIS NOVOS CADASTRADOS COM LIMITE DETERMINADO
    function buscaProductsNew($loja){
        //		SELECT I.descricao, I.imagem, I.precovenda, I.datacadastro
        // 		FROM item AS I
        // 		INNER JOIN estoque AS E
        // 		ON I.imagem != '' --> SÓ COM IMAGEMS
        // 		AND I.nivel1 != 10000460 --> NÃO ESTOCADO
        // 		AND I.coditem = E.coditem
        // 		AND I.codempitem = E.codempitem
        // 		WHERE E.qtd > 0 --> QUE TENHA QUANTIA EM ESTOQUE
        // 		AND E.codempresa = 1 --> "1" LOJA MATRIZ, "2" LOJA FILIAL, "4" LOJA ONLY YOU | UP
        // 		GROUP BY I.descricao, I.imagem, I.precovenda, I.datacadastro
        // 		ORDER BY I.datacadastro DESC
        //		LIMIT 10
        
        $dadosBD = $this->db->select('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->from('item i')
            ->join('estoque e', 'i.coditem = e.coditem')
            ->where('i.imagem !=', '')
            ->where('i.nivel1 != 10000460')
            ->where('i.codempitem = e.codempitem')
            ->where('e.qtd > 0')
            ->where('e.codempresa =', $loja)
            ->group_by('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->order_by('i.datacadastro', 'DESC')
            ->limit(12)
            ->get()
            ->result();
        
            foreach($dadosBD as $dados){ 
                $dados->imagem = $this->imageLink($dados->imagem); 
            }

		return $dadosBD;
    }

// ===========================================================================================================================

    // BUSCA TODAS AS MARCAS CADASTRADAS NO BANCO COM IMAGEM
    function buscaMarcas($loja){
        //SELECT M.descricao, M.imagem 
        //FROM marca 
        //AS M
        //INNER JOIN item AS I ON M.codmarca = I.codmarca AND M.imagem != ''
        //INNER JOIN estoque AS E ON I.imagem != '' AND I.nivel1 != 10000460 AND I.coditem = E.coditem AND I.codempitem = E.codempitem WHERE E.qtd > 0 AND E.codempresa = 1 
        //GROUP BY M.codmarca, M.imagem
        $dadosBD = $this->db->select('M.codmarca, M.descricao, M.imagem')
            ->from('marca M')
            ->join('item I', 'M.codmarca = I.codmarca')
            ->where('M.imagem !=', '')
            ->join('estoque E', 'I.coditem = E.coditem')
            ->where('I.codempitem = E.codempitem')
            ->where('I.imagem !=', '')
            ->where('I.nivel1 != 10000460')
            ->where('E.qtd > 0')
            ->where('E.codempresa =', $loja)
            ->group_by('M.codmarca, M.imagem')
            ->get()
            ->result();

		return $dadosBD;
    }

// ===========================================================================================================================

    // BUSCA PRODUTOS PELOS PRODUTOS MAIS NOVOS NA LOJA
    function buscaProducts($loja, $limit = null, $offset = null){
        
        $dadosBD = $this->db->select('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->from('item i')
            ->join('estoque e', 'i.coditem = e.coditem')
            ->where('i.imagem !=', '')
            ->where('i.nivel1 != 10000460')
            ->where('i.codempitem = e.codempitem')
            ->where('e.qtd > 0')
            ->where('e.codempresa =', $loja)
            ->group_by('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->order_by('i.datacadastro', 'DESC')
            ->limit($limit,$offset)
            ->get()
            ->result();

            foreach($dadosBD as $dados){ 
                $dados->imagem = $this->imageLink($dados->imagem); 
            }

		return $dadosBD;
    }

    // BUSCA A QUANTIDADE DE PRODUTOS PARA A FUNÇÃO ACIMA
    function buscaProductsQuant($loja){
        
        $dadosBD = $this->db->select('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->from('item i')
            ->join('estoque e', 'i.coditem = e.coditem')
            ->where('i.imagem !=', '')
            ->where('i.nivel1 != 10000460')
            ->where('i.codempitem = e.codempitem')
            ->where('e.qtd > 0')
            ->where('e.codempresa =', $loja)
            ->group_by('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->get()
            ->result();

            $count = 0;
            foreach($dadosBD as $dados){ 
                $count = $count + 1;
            }

        return $count;
    }

// ===========================================================================================================================

    // BUSCA PRODUTOS REFERENTE A UMA MARCA
    function buscaProductsMarca($loja, $codmarca, $limit = null, $offset = null){
        
        $dadosBD = $this->db->select('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->from('item i')
            ->join('estoque e', 'i.coditem = e.coditem')
            ->where('i.imagem !=', '')
            ->where('i.nivel1 != 10000460')
            ->where('i.codmarca =', $codmarca)
            ->where('i.codempitem = e.codempitem')
            ->where('e.qtd > 0')
            ->where('e.codempresa =', $loja)
            ->group_by('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->order_by('i.datacadastro', 'DESC')
            ->limit($limit,$offset)
            ->get()
            ->result();

            foreach($dadosBD as $dados){ 
                $dados->imagem = $this->imageLink($dados->imagem); 
            }

		return $dadosBD;
    }

    // BUSCA A QUANTIDADE DE PRODUTOS PARA A FUNÇÃO ACIMA
    function buscaProductsMarcaQuant($loja, $codmarca){
        
        $dadosBD = $this->db->select('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->from('item i')
            ->join('estoque e', 'i.coditem = e.coditem')
            ->where('i.imagem !=', '')
            ->where('i.nivel1 != 10000460')
            ->where('i.codmarca =', $codmarca)
            ->where('i.codempitem = e.codempitem')
            ->where('e.qtd > 0')
            ->where('e.codempresa =', $loja)
            ->group_by('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->get()
            ->result();

            $count = 0;
            foreach($dadosBD as $dados){ 
                $count = $count + 1;
            }

        return $count;
    }

// ===========================================================================================================================

    // BUSCA PRODUTOS REFERENTE A UMA MARCA E UMA CATEGORIA
    function buscaProductsMarcaCategoria($loja, $codmarca, $codcategoria, $limit = null, $offset = null){
        
        $dadosBD = $this->db->select('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->from('item i')
            ->join('estoque e', 'i.coditem = e.coditem')
            ->where('i.imagem !=', '')
            ->where('i.nivel1 =', $codcategoria)
            ->where('i.codmarca =', $codmarca)
            ->where('i.codempitem = e.codempitem')
            ->where('e.qtd > 0')
            ->where('e.codempresa =', $loja)
            ->group_by('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->order_by('i.datacadastro', 'DESC')
            ->limit($limit,$offset)
            ->get()
            ->result();

            foreach($dadosBD as $dados){ 
                $dados->imagem = $this->imageLink($dados->imagem); 
            }

		return $dadosBD;
    }

    // BUSCA A QUANTIDADE DE PRODUTOS PARA A FUNÇÃO ACIMA
    function buscaProductsMarcaCategoriaQuant($loja, $codmarca, $codcategoria){
        
        $dadosBD = $this->db->select('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->from('item i')
            ->join('estoque e', 'i.coditem = e.coditem')
            ->where('i.imagem !=', '')
            ->where('i.nivel1 =', $codcategoria)
            ->where('i.codmarca =', $codmarca)
            ->where('i.codempitem = e.codempitem')
            ->where('e.qtd > 0')
            ->where('e.codempresa =', $loja)
            ->group_by('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->get()
            ->result();

            $count = 0;
            foreach($dadosBD as $dados){ 
                $count = $count + 1;
            }

        return $count;
    }

// ===========================================================================================================================

    // BUSCA PRODUTOS POR UMA DETERMINADA CATEGORIA
    function buscaProductsCategoria($loja, $codcategoria, $limit = null, $offset = null){
        
        $dadosBD = $this->db->select('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->from('item i')
            ->join('estoque e', 'i.coditem = e.coditem')
            ->where('i.imagem !=', '')
            ->where('i.nivel1 =', $codcategoria)
            ->where('i.codempitem = e.codempitem')
            ->where('e.qtd > 0')
            ->where('e.codempresa =', $loja)
            ->group_by('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->order_by('i.datacadastro', 'DESC')
            ->limit($limit,$offset)
            ->get()
            ->result();

            foreach($dadosBD as $dados){ 
                $dados->imagem = $this->imageLink($dados->imagem); 
            }

		return $dadosBD;
    }

    // BUSCA A QUANTIDADE DE PRODUTOS PARA A FUNÇÃO ACIMA
    function buscaProductsCategoriaQuant($loja, $codcategoria){
        
        $dadosBD = $this->db->select('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->from('item i')
            ->join('estoque e', 'i.coditem = e.coditem')
            ->where('i.imagem !=', '')
            ->where('i.nivel1 =', $codcategoria)
            ->where('i.codempitem = e.codempitem')
            ->where('e.qtd > 0')
            ->where('e.codempresa =', $loja)
            ->group_by('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->get()
            ->result();

            $count = 0;
            foreach($dadosBD as $dados){ 
                $count = $count + 1;
            }

        return $count;
    }

// ===========================================================================================================================

    // BUSCA PRODUTOS DE UMA DETERMINADA LOJA POR PESQUISA
    function buscaProductsSearch($loja, $termo){
        
        $dadosBD = $this->db->select('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->from('item i')
            ->join('estoque e', 'i.coditem = e.coditem')
            ->where('i.imagem !=', '')
            ->where('i.codempitem = e.codempitem')
            ->where('e.qtd > 0')
            ->where('e.codempresa =', $loja)
            ->like('i.descricao', $termo, 'both')
            ->group_by('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->order_by('i.datacadastro', 'DESC')
            ->get()
            ->result();

            foreach($dadosBD as $dados){ 
                $dados->imagem = $this->imageLink($dados->imagem); 
            }

		return $dadosBD;
    }

    // BUSCA A QUANTIDADE DE PRODUTOS PARA A FUNÇÃO ACIMA
    function buscaProductsSearchQuant($loja, $termo){
        
        $dadosBD = $this->db->select('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->from('item i')
            ->join('estoque e', 'i.coditem = e.coditem')
            ->where('i.imagem !=', '')
            ->where('i.codempitem = e.codempitem')
            ->where('e.qtd > 0')
            ->where('e.codempresa =', $loja)
            ->like('i.descricao', $termo, 'both')
            ->group_by('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->get()
            ->result();

            $count = 0;
            foreach($dadosBD as $dados){ 
                $count = $count + 1;
            }

        return $count;
    }

// ===========================================================================================================================

    // BUSCA TODOS OS DADO DO DETERMINADO PRODUTO
    function searchProduct($codempitem, $coditem){
        
        $dadosBD = $this->db->select('*')
            ->from('item')
            ->where('codempitem =', $codempitem)
            ->where('coditem =', $coditem)
            ->get()
            ->result();

            foreach($dadosBD as $dados){ 
                $dados->imagem = $this->imageLink($dados->imagem); 
            }

		return $dadosBD;
    }

// ===========================================================================================================================

    // BUSCA OS TAMANHOS E A QUANTIDADE DE DETERMINADO PRODUTO NO ESTOQUE DA DETERMINADA LOJA
    function searchQtdStock($idloja, $codempitem, $coditem){
       
        $dadosBD = $this->db->select('T.descricao, E.qtd')
            ->from('estoque E')
            ->join('tamanho T', 'E.codtamanho = T.codtamanho')
            ->where('codempresa =', $idloja)
            ->where('codempitem =', $codempitem)
            ->where('coditem =', $coditem)
            ->where('qtd > 0')
            ->get()
            ->result();


        if ($dadosBD == null) {
            
            $dadosBD = $this->db->select('codtamanho, qtd')
            ->from('estoque')
            ->where('codempresa =', $idloja)
            ->where('codempitem =', $codempitem)
            ->where('coditem =', $coditem)
            ->where('qtd > 0')
            ->get()
            ->result();
        }

		return $dadosBD;
    }

// ===========================================================================================================================

    // BUSCA PRODUTOS RELACIONADOS "MESMA MARCA E MAIS NOVOS"
    function searchRelated($loja, $codmarca, $codempitem, $coditem){
        
        $dadosBD = $this->db->select('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->from('item i')
            ->join('estoque e', 'i.coditem = e.coditem')
            ->where('i.imagem !=', '')
            ->where('i.coditem !=', $coditem)
            ->where('i.nivel1 != 10000460')
            ->where('i.codmarca =', $codmarca)
            ->where('i.codempitem = e.codempitem')
            ->where('e.qtd > 0')
            ->where('e.codempresa =', $loja)
            ->group_by('i.codempitem, i.coditem, i.descricao, i.imagem, i.precovenda, i.datacadastro')
            ->order_by('i.datacadastro', 'DESC')
            ->limit(12)
            ->get()
            ->result();
        
            foreach($dadosBD as $dados){ 
                $dados->imagem = $this->imageLink($dados->imagem); 
            }

		return $dadosBD;
    }


// ===========================================================================================================================

    //BUSCA AS CATEGORIAS DO BANCO DE DADOS PARA FAZER A BUSCA
    function searchCategorias(){
        
        $dadosBD = $this->db->select('*')
            ->from("nivelitem")
            ->where("codtipo = 1")
            ->where("codnivel != 10000460")
            ->get()
            ->result();

		return $dadosBD;
    }


// ===========================================================================================================================

	// FUNÇÃO QUE ALTERA OS LINKS DAS IMAGEM PARA O LINK DA IMAGEM DE MELHOR QUALIDADE
	//--------------------------------------------------
	// Pequeno: $letra = p | $diretorio: item/pequeno
	// Medio: $letra = m | $diretorio: item/medio
	// Grande: $letra = g | $diretorio: item/grande
	//--------------------------------------------------
	function imageLink($link){
		// Letra que identifica o tamanho da imagem;
		$letra = 'g';
		// Adiciona a letra g na posição -4 da STRING e deixa as quatro ultimas letras no final da STRING
		$link = substr_replace($link, $letra, -4, -4);
		// Transforma a string em um array
		$arrayLink = explode('item', $link);
		// Função: explode('delimitador', string);
		$diretorio = 'item/grande';
		// Junta tudo em uma string
		$stringLink = implode($diretorio, $arrayLink);
		// Imprime o resultado
		return $stringLink;
    }
    
    function buscaPorLoja($id){
        $dadosBD = $this->dbsite->query('SELECT * FROM lojas WHERE id ='.$id)
            ->result();

		return $dadosBD;
    }

    function buscaBanners($id){
        $dadosBD = $this->dbsite->query('SELECT * FROM banner WHERE id_loja ='.$id.' OR id_loja = 0')
            ->result();

        return $dadosBD;
    }
}
