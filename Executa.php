<?php 

require_once('SmartphoneImportadoFactory.php');
require_once('PacoteViagemFactory.php');

$factory = new SmartphoneImportadoFactory;
$produto = $factory->criarProduto(100);

$factory2 = new PacoteViagemFactory;
$produto2 = $factory2->criarProduto(100);

var_dump($produto2);