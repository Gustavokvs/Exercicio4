<?php

class Viagem
{
    private float $distancia;
    private string $origem;
    private float $estimado;
    private string $destino;
    private string $tipoVeiculo;
    private float $consumo;

    public function __construct()
    {
        $this->distancia = 0;
        $this->estimado = 0;
    }

    public function getDistancia(): float
    {
        return $this->distancia;
    }

    public function setDistancia(float $distancia): self
    {
        $this->distancia = $distancia;
        return $this;
    }

    public function getOrigem(): string
    {
        return $this->origem;
    }

    public function setOrigem(string $origem): self
    {
        $this->origem = $origem;
        return $this;
    }

    public function getEstimado(): float
    {
        return $this->estimado;
    }

    public function setEstimado(float $estimado): self
    {
        $this->estimado = $estimado;
        return $this;
    }

    public function getDestino(): string
    {
        return $this->destino;
    }

    public function setDestino(string $destino): self
    {
        $this->destino = $destino;
        return $this;
    }

    public function getTipoVeiculo(): string
    {
        return $this->tipoVeiculo;
    }

    public function setTipoVeiculo(string $tipoVeiculo): self
    {
        $this->tipoVeiculo = $tipoVeiculo;
        return $this;
    }

    public function getConsumo(): float
    {
        return $this->consumo;
    }

    public function setConsumo(float $consumo): self
    {
        $this->consumo = $consumo;
        return $this;
    }


    public function calcularVelocidade(): string
    {
        if ($this->distancia > 0 && $this->estimado > 0) {
            $velocidadeMedia = $this->distancia / $this->estimado;
            return number_format($velocidadeMedia, 2) . " km/h";
        } else {
            return "Por favor, digite uma distância e tempo válidos.";
        }
    }

    public function calcularConsumoEstimado(): string
    {
        if ($this->consumo > 0) {
            $litrosNecessarios = $this->distancia / $this->consumo;
            return number_format($litrosNecessarios, 2) . " litros estimados para a viagem.";
        } else {
            return "Consumo inválido. Verifique o tipo de veículo.";
        }
    }

    public function calcularCustoViagem(): string
    {
        $precoCombustivel = 6.27;
        if ($this->consumo > 0) {
            $litros = $this->distancia / $this->consumo;
            $custo = $litros * $precoCombustivel;
            return "Custo estimado da viagem: R$ " . number_format($custo, 2, ',', '.');
        } else {
            return "Não foi possível calcular o custo. Verifique o consumo informado.";
        }
    }

}
?>