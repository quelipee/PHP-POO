<?php

//Crie uma interface chamada OperacaoMatematica que possui os métodos somar(), subtrair(), multiplicar() e dividir().
//Em seguida, crie duas classes que implementam essa interface: Calculadora e CalculadoraCientifica. A classe Calculadora deve possuir os métodos somar(),
//subtrair(), multiplicar() e dividir() que executam as operações matemáticas básicas. A classe CalculadoraCientifica deve estender a classe Calculadora e
//adicionar os métodos potenciacao() e raizQuadrada().

//atividade 5
interface OperacaoMatematica
{
    function somar($n1,$n2);
    function subtrair($n1,$n2);
    function multiplicar($n1,$n2);
    function dividir($n1,$n2);
}

class Calculadora implements OperacaoMatematica
{
    public function dividir($n1, $n2)
    {
        if ($n2 === 0)
        {
            return 'error';
        }
        return $n1 / $n2;
    }
    public function multiplicar($n1, $n2)
    {
        return $n1 * $n2;
    }
    public function somar($n1, $n2)
    {
        return $n1 + $n2;
    }
    public function subtrair($n1, $n2)
    {
        return $n1 - $n2;
    }
}

class CalculadoraCientifica implements OperacaoMatematica
{
    public function dividir($n1, $n2)
    {
        if ($n2 === 0)
        {
            return 'error';
        }
        return $n1 / $n2;
    }
    public function multiplicar($n1, $n2)
    {
        return $n1 * $n2;
    }
    public function somar($n1, $n2)
    {
        return $n1 + $n2;
    }
    public function subtrair($n1, $n2)
    {
        return $n1 - $n2;
    }

    public function potenciacao($n1,$n2)
    {
        $total = 0;
        for ($i = 1; $i <= $n2; $i++)
        {
            if ($i == $n2)
            {
                break;
            }
            if ($total == 0)
            {
                $total = $n1;
            }
            $total *= $n1;
        }
        return $total;
    }

    public function raizQuadrada($n1)
    {
        return sqrt($n1);
    }
}
$calculadora = new Calculadora();
var_dump($calculadora->subtrair(10,2));
$c = new CalculadoraCientifica();
var_dump($c->raizQuadrada(169));