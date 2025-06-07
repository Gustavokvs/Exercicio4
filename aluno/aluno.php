<?php

class Aluno
{
    private string $nome;
    private string $disciplina;
    private float $nota1;
    private float $nota2;
    private float $nota3;

    private float $media;


    public function __construct($nome, $disciplina, $nota1, $nota2, $nota3, $media)
    {
        $this->nome = $nome;
        $this->disciplina = $disciplina;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
        $this->media = $media;
    }



    public function calcularMedia($nota1, $nota2, $nota3)
    {
        $this->media = (($nota1 + $nota2 + $nota3) / 3);

    }
    public function setResultado
    {
        if ($this->media >= 7) {
            return "O aluno $nome ";
        }else{
            return "VSF";
        }
    }

}

?>