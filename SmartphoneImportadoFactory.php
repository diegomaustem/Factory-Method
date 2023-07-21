<?php 

require_once('ProdutoFactory.php');

class SmartphoneImportadoFactory extends ProdutoFactory 
{
    private const URI_API = 'https://api.exchangeratesapi.io/v1/latest?base=USD&symbols=BRL';

    public function criarProduto(float $valor) : SmartphoneImportado {

        $cotacao_json = json_decode(file_get_contents(self::URI_API));
        $cotacao = $cotacao_json->rates->BRL;

        $produto = new SmartphoneImportado();
        $produto->setValor($valor * $cotacao);

        return $produto;
    } 
}

