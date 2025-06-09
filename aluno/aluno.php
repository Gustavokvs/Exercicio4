<?php

class Aluno
{
    private string $nome;
    private string $disciplina;
    private float $nota1;
    private float $nota2;
    private float $nota3;

    private float $media;


    public function __construct($nome, $disciplina, $nota1, $nota2, $nota3)
    {
        $this->nome = $nome;
        $this->disciplina = $disciplina;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;

    }



    public function calcularMedia()
    {
        $this->media = (($this->nota1 + $this->nota2 + $this->nota3) / 3);

    }
    public function setResultado(): string
    {
        if ($this->media >= 7) {
            return "O aluno $this->nome, na disciplina $this->disciplina <br> tem média $this->media, portanto está APROVADO ";
        } else if ($this->media >= 5 && $this->media <= 7) {
            return "O aluno $this->nome, na disciplina $this->disciplina <br> tem média $this->media, portanto está EM RECUPERAÇÃO";
        } else {
            return "O aluno $this->nome, na disciplina $this->disciplina <br> tem média $this->media, portanto está REPROVADO";
        }
    }

}

?>