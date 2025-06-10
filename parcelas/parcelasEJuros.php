<?php

class Parcela
{
    private float $valorCompra;
    private int $numeroParcelas;
    private float $taxaDeJurosMensalPercentagem;
    private float $taxaDeJurosMensal;
    private float $parcelasComJuros;

    public function getValorCompra(): float
    {
        return $this->valorCompra;
    }

    public function setValorCompra(float $valorCompra): self
    {
        $this->valorCompra = $valorCompra;
        return $this;
    }

    public function getNumeroParcelas(): int
    {
        return $this->numeroParcelas;
    }

    public function setNumeroParcelas(int $numeroParcelas): self
    {
        $this->numeroParcelas = $numeroParcelas;
        return $this;
    }

    public function getTaxaDeJurosMensalPercentagem(): float
    {
        return $this->taxaDeJurosMensalPercentagem;
    }

    public function setTaxaDeJurosMensalPercentagem(float $taxaPercentual): self
    {
        $this->taxaDeJurosMensalPercentagem = $taxaPercentual;
        $this->taxaDeJurosMensal = $taxaPercentual / 100;
        return $this;
    }

    public function getTaxaDeJurosMensal(): float
    {
        return $this->taxaDeJurosMensal;
    }

    public function setTaxaDeJurosMensal(float $taxaDecimal): self
    {
        $this->taxaDeJurosMensal = $taxaDecimal;
        return $this;
    }

    public function calcularJurosMensal(): float
    {
        return $this->valorCompra * $this->taxaDeJurosMensal;
    }

    public function calcularParcelasComJuros(): float
    {
        $totalComJuros = $this->valorCompra * pow(1 + $this->taxaDeJurosMensal, $this->numeroParcelas);
        $this->parcelasComJuros = $totalComJuros / $this->numeroParcelas;
        return $this->parcelasComJuros;
    }

    public function calcularTotalAPagar(): float
    {
        return $this->valorCompra * pow(1 + $this->taxaDeJurosMensal, $this->numeroParcelas);
    }

    public function calcularJurosTotais(): float
    {
        return $this->calcularTotalAPagar() - $this->valorCompra;
    }

    public function formatarValor(float $valor): string
    {
        return number_format($valor, 2, ',', '.');
    }

    public function getParcelaFormatada(): string
    {
        return $this->formatarValor($this->calcularParcelasComJuros());
    }

    public function getTotalAPagarFormatado(): string
    {
        return $this->formatarValor($this->calcularTotalAPagar());
    }

    public function getJurosTotaisFormatado(): string
    {
        return $this->formatarValor($this->calcularJurosTotais());
    }

    public function getJurosMensalFormatado(): string
    {
        return $this->formatarValor($this->calcularJurosMensal());
    }
}
