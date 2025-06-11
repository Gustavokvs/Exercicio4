<?php

class Estoque
{

    private string $nomeProduto;
    private int $quantidadeEstoque;
    private float $valorUnitario;
    private int $entradaEstoque;
    private float $saidaEstoque;



    function __construct()
    {

        $this->quantidadeEstoque = 0;

    }

    public function setNomeProduto($nomeProduto)
    {
        $this->nomeProduto = $nomeProduto;
    }

    public function setValorUnitario($valorUnitario)
    {

        $this->valorUnitario = $valorUnitario;
    }

    public function setEntradaEstoque($entradaEstoque)
    {
        $this->entradaEstoque = $entradaEstoque;
    }

    public function setSaidaEstoque($saidaEstoque)
    {
        $this->saidaEstoque = $saidaEstoque;
    }

    public function setQuantidadeEstoque($quantidadeEstoque)
    {
        $this->quantidadeEstoque = $quantidadeEstoque;
    }

    public function getNomeProduto(): string
    {
        return $this->nomeProduto;
    }

    public function getValorUnitario(): float
    {
        return $this->valorUnitario;
    }

    public function getQuantidadeEstoque(): int
    {
        return $this->quantidadeEstoque;
    }

    public function getEntradaEstoque(): int
    {
        return $this->entradaEstoque;
    }

    public function getSaidaEstoque(): int
    {
        return $this->saidaEstoque;
    }

    public function darEntradaEstoque($entradaEstoque): string
    {
        if ($entradaEstoque > 0) {

            $this->quantidadeEstoque += $entradaEstoque;

        }
        return "$this->nomeProduto adicionado $this->quantidadeEstoque no estoque";
    }
    public function darSaidaEstoque($saidaEstoque): string
    {


        if ($saidaEstoque > 0) {

            $this->quantidadeEstoque -= $saidaEstoque;
        }

        return "retirado " . $this->getQuantidadeEstoque() . " do estoque";
    }

    public function consultarEstoque(): string
    {
        $valorTotalEntrada = $this->getValorUnitario() * $this->getQuantidadeEstoque();

        return $this->getNomeProduto() . " tem um total de " . $this->getQuantidadeEstoque() . " em estoque <br>
        total em valor: $valorTotalEntrada <br>
        preço por peça: " . $this->getValorUnitario();

    }
}


?>