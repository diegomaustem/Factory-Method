<?php 

require_once('ProdutoInterface.php');

class SmartphoneImportado implements ProdutoInterface 
{
    private float $valor;

    public function getNome(): string 
    {
        return "Smartphone importado Xaomi";
    }

    public function setValor(float $valor)
    {
        $this->valor = $valor;
    }

}