<?php 

require_once('ProdutoInterface.php');

class PacoteViagem implements ProdutoInterface 
{
    private DateTimeInterface $data;
    private float $valor;

    public function __construct(DateTimeInterface $data)
    {
        $this->data = $data;
    }

    public function getNome(): string 
    {
        return "Pacote de Viagem";
    }

    public function setValor(float $valor)
    {
        $this->valor = $valor;
    }

}