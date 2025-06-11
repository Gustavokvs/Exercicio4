<?php

class CalculadoraGeo
{
    private string $forma;
    private float $lado;
    private float $altura;
    private float $base;
    private float $raio;
    private float $resultado = 0;

    public function getForma(): string
    {
        return $this->forma;
    }

    public function setForma(string $forma): self
    {
        $this->forma = $forma;
        return $this;
    }

    public function getLado(): float
    {
        return $this->lado;
    }

    public function setLado(float $lado): self
    {
        $this->lado = $lado;
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

    public function getBase(): float
    {
        return $this->base;
    }

    public function setBase(float $base): self
    {
        $this->base = $base;
        return $this;
    }

    public function getRaio(): float
    {
        return $this->raio;
    }

    public function setRaio(float $raio): self
    {
        $this->raio = $raio;
        return $this;
    }

    public function calcularQuadrado()
    {

        if ($this->lado > 0) {

            $this->resultado = pow($this->lado, 2);
            return $this->resultado;
        }


    }

    public function calcularRetangulo()
    {
        if ($this->base > 0 && $this->altura > 0) {
            $this->resultado = $this->getBase() * $this->getAltura();
        }
        return $this->resultado;
    }

    public function calcularCirculo()
    {
        if ($this->raio > 0) {
            $this->resultado = pi() * pow($this->getRaio(), 2);


        }
        return $this->resultado;
    }


}