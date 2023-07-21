<?php 

abstract class ProdutoFactory 
{
    public abstract function criarProduto(float $valor): ProdutoInterface;
}