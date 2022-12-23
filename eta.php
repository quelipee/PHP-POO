<?php

//Crie uma classe abstrata chamada FiguraGeometrica que possui os atributos altura e largura. Em seguida, crie as classes Quadrado e Retangulo
//que estendem essa classe abstrata. A classe Quadrado deve possuir o método calcularArea() que calcula a área do quadrado a partir da altura e
//largura. A classe Retângulo deve possuir o método calcularPerimetro() que calcula o perímetro do retângulo a partir da altura e largura.
//Atividade 6

abstract class FiguraGeometrica
{
    protected $altura;
    protected $largura;
}

class Quadrado extends FiguraGeometrica
{
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setLargura($largura)
    {
        $this->largura = $largura;
    }

    public function getLargura()
    {
        return $this->largura;
    }
    public function calcularArea($largura, $altura)
    {
        return $largura * $altura;
    }
}

class Retangulo extends FiguraGeometrica
{
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setLargura($largura)
    {
        $this->largura = $largura;
    }

    public function getLargura()
    {
        return $this->largura;
    }
    public function calcularPerimetro($largura, $altura)
    {
        return 2 * ($altura + $largura);
    }
}

$q = new Quadrado();
echo $q->calcularArea(5,5);
$r = new Retangulo();
echo $r->calcularPerimetro(5,10);