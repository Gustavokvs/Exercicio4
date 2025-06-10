<?php
class Conversor
{

    private float $moeda;
    private string $escolha;
    private float $moedaEuro;
    private float $moedaDolar;


    // public function __construct($moeda)
    // {
    //     $this->moeda = $moeda;

    // }



    //GETTERS E SETTERS

    public function getMoeda(): float
    {
        return $this->moeda;
    }
    public function getEscolha(): string
    {
        return $this->escolha;
    }
    public function getMoedaEuro(): float
    {
        return $this->moedaEuro;
    }

    public function getMoedaDolar(): float
    {
        return $this->moedaDolar;
    }

    public function setMoeda($moeda)
    {
        $this->moeda = $moeda;
    }
    public function setEscolha($escolha)
    {
        $this->escolha = $escolha;
    }
    public function setMoedaDolar($moedaDolar)
    {
        $this->moedaDolar = $moedaDolar;
    }

    public function setMoedaEuro($moedaEuro)
    {
        $this->moedaEuro = $moedaEuro;
    }





    public function converterDolar($moeda)
    {
        return $moeda / $this->moedaDolar; // conversão correta
    }

    public function converterEuro($moeda)
    {
        return $moeda / $this->moedaEuro;
    }


    public function converter($escolha)
    {
        $escolha = strtolower($escolha);
        switch ($escolha) {
            case "dolar":
                return "Valor em dólar: $" . number_format($this->converterDolar($this->getMoeda()), 2, '.', ',');

            case "euro":
                return "Valor em euro: €" . number_format($this->converterEuro($this->moeda), 2, ',', '.');

            default:
                return "Escolha inválida! Digite 'dolar' ou 'euro'.";
        }
    }




}





?>