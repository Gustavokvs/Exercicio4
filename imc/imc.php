<?php

class Imc
{
    private float $peso;
    private float $altura;
    private float $imc;

    public function getPeso(): float
    {
        return $this->peso;
    }

    public function setPeso(float $peso): self
    {
        $this->peso = $peso;
        return $this;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function setAltura(float $altura): self
    {
        $this->altura = $altura;
        return $this;
    }

    public function getImc(): float
    {
        return $this->imc;
    }

    public function setImc(float $imc): self
    {
        $this->imc = $imc;
        return $this;
    }

    public function calcularIMC(): string
    {
        $this->setImc($this->peso / ($this->altura ** 2));

        if ($this->imc < 18.5) {
            $mensagem = "Você está abaixo do peso ideal.";
        } else if ($this->imc <= 24.9) {
            $mensagem = "Você está no peso ideal.";
        } else if ($this->imc <= 29.9) {
            $mensagem = "Você está acima do peso ideal.";
        } else {
            $mensagem = "Você tem obesidade.";
        }

        return "Seu IMC é {$this->imc}. {$mensagem}";
    }
}
