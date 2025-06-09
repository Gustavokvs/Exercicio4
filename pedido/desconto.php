<?php
class Desconto
{
    private string $nomeProduto;
    private string $tipoCliente;
    private float $quantidade;
    private float $precoUnitario;
    private float $desconto;
    private float $total;
    private float $imposto;

    public function __construct($nomeProduto, $tipoCliente, $quantidade, $precoUnitario)
    {
        $this->nomeProduto = $nomeProduto;
        $this->tipoCliente = $tipoCliente;
        $this->precoUnitario = $precoUnitario;
        $this->quantidade = $quantidade;
    }


    public function calcular($nomeProduto)
    {
        if (strtolower($this->tipoCliente) == "premium") {
            $this->total = $this->quantidade * $this->precoUnitario;
            $this->imposto = 0.08 * $this->total;
            $precoComImposto = $this->total + $this->imposto;
            $this->desconto = 0.10 * $precoComImposto;
            $this->total = $precoComImposto - $this->desconto;

            return
                "Total bruto: R$ " . number_format($this->quantidade * $this->precoUnitario, 2, ',', '.') . "<br>" .
                "Imposto (8%): R$ " . number_format($this->imposto, 2, ',', '.') . "<br>" .
                "Desconto (10% premium): R$ " . number_format($this->desconto, 2, ',', '.') . "<br>" .
                "Total final em $nomeProduto: R$ " . number_format($this->total, 2, ',', '.');
        } else if (strtolower($this->tipoCliente) == "comum") {
            $this->total = $this->quantidade * $this->precoUnitario;
            $this->imposto = 0.08 * $this->total;
            $precoComImposto = $this->total + $this->imposto;
            $this->total = $precoComImposto;

            return
                "Total bruto: R$ " . number_format($this->quantidade * $this->precoUnitario, 2, ',', '.') . "<br>" .
                "Imposto (8%): R$ " . number_format($this->imposto, 2, ',', '.') . "<br>" .
                "Desconto: R$ 0,00 <br>" .
                "Total final em $nomeProduto: R$ " . number_format($this->total, 2, ',', '.');
        } else {
            return "Por favor, digite um tipo de cliente válido";
        }
    }


}



?>