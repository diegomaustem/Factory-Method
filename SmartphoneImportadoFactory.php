<?php 
require_once('ProdutoFactory.php');
require_once('SmartphoneImportado.php');

class SmartphoneImportadoFactory extends ProdutoFactory 
{
    private const URI_API = 'https://economia.awesomeapi.com.br/json/last/USD-BRL';

    public function criarProduto(float $valor) : SmartphoneImportado {

        $cotacao_json = json_decode(file_get_contents(self::URI_API));
        $cotacao = $cotacao_json->USDBRL->high;
        
        $produto = new SmartphoneImportado();
        $produto->setValor($valor * $cotacao);

        return $produto;
    } 
}

