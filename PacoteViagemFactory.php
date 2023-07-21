<?php 

require_once('ProdutoFactory.php');

class PacoteViagemFactory extends ProdutoFactory {

    const MESES_ALTA_TEMPORADA = [1, 7, 12];

    public function criarProduto(float $valor) : PacoteViagem {

        $hoje = new DateTime();
        $produto = new PacoteViagem($hoje);

        if(in_array($hoje->format('m'), self::MESES_ALTA_TEMPORADA)) {
            $produto->setValor($valor * 2);
        } else {
            $produto->setValor($valor);
        }
        return $produto;
    } 
}



