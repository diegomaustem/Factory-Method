<?php 

interface ProdutoInterface
{
    public function getNome() : string;
    public function setValor(float $valor);
}

