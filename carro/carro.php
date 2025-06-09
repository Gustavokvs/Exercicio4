<?php
class Carro
{
    private string $modelo;
    private string $combustivel; 
    private float $tanqueCheio;
    private float $consumo; 
    private float $kmRodados; 
    private float $precoCombustivel;

    public function __construct($modelo, $combustivel, $tanqueCheio, $consumo, $kmRodados, $precoCombustivel)
    {
        $this->modelo = $modelo;
        $this->combustivel = strtolower($combustivel);
        $this->tanqueCheio = $tanqueCheio;
        $this->consumo = $consumo;
        $this->kmRodados = $kmRodados;
        $this->precoCombustivel = $precoCombustivel;
    }

    public function getAutonomia(): float
    {
        return $this->consumo * $this->tanqueCheio;
    }

    public function getCustoPorKm(): float
    {
        return $this->precoCombustivel / $this->consumo;
    }


    public function precisaRevisao(): bool
    {
        return $this->kmRodados >= 10000;
    }

    public function resumo(): string
    {
        $autonomia = number_format($this->getAutonomia(), 2, ',', '.');
        $custoKm = number_format($this->getCustoPorKm(), 2, ',', '.');
        $revisao = $this->precisaRevisao() ? "Sim, está na hora da revisão." : "Não precisa de revisão ainda.";

        return "Modelo: $this->modelo<br>" .
               "Combustível: $this->combustivel<br>" .
               "Autonomia: $autonomia km<br>" .
               "Custo por km: R$ $custoKm<br>" .
               "Revisão: $revisao<br>";
    }
}
?>
