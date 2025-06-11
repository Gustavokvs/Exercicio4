<?php

class Hotel
{
    private string $nome;
    private int $noites;
    private string $tipoQuarto;
    private float $desconto = 0;
    private float $total = 0;

    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    public function getNoites(): int
    {
        return $this->noites;
    }
    public function setNoites(int $noites): self
    {
        $this->noites = $noites;
        return $this;
    }

    public function getTipoQuarto(): string
    {
        return $this->tipoQuarto;
    }
    public function setTipoQuarto(string $tipoQuarto): self
    {
        $this->tipoQuarto = $tipoQuarto;
        return $this;
    }


    public function getDesconto(): float
    {
        return $this->desconto;
    }
    public function setTotal(float $total)
    {
        $this->total = $total;
    }
    public function getTotal(): float
    {
        return $this->total;
    }

    public function calcularDesconto(float $subtotal): void
    {
        if ($this->noites >= 5) {
            $this->desconto = $subtotal * 0.05;
        } else {
            $this->desconto = 0;
        }
    }

    public function calcularTotalHospedagem(): float|string
    {
        switch (strtolower($this->tipoQuarto)) {
            case "simples":
                $precoNoite = 120;
                break;
            case "luxo":
                $precoNoite = 200;
                break;
            case "suite":
                $precoNoite = 350;
                break;
            default:
                $precoNoite = 0;
        }

        $subtotal = $precoNoite * $this->noites;
        $this->calcularDesconto($subtotal);

        $this->setTotal($subtotal - $this->desconto);

        return "";
    }

    public function fazerAtendimento()
    {

        return "Bem vindo " . $this->getNome() . "<br>
        sua estadia no Hotel, no quarto " . $this->getTipoQuarto() . " <br>
        por " . $this->getNoites() . " noites, fica no valor total de " . $this->getTotal();
    }




}