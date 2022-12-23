<?php

//Crie uma interface chamada TransacaoBancaria que possui os métodos depositar() e sacar().
//Em seguida, crie uma classe ContaBancaria que implementa essa interface e possui os atributos nomeDoTitular,
//numeroDaConta e saldo. A classe ContaBancaria deve ter os métodos depositar() e sacar() que permitem adicionar ou
//remover valores da conta de acordo com a transação realizada.
//atividade 7

interface TransacaoBancaria
{
    function depositar($vl);
    function sacar($vl);
}

class ContaBancaria implements TransacaoBancaria
{
    public $nomeDoTitular;
    public $numeroDaConta;
    public $saldo;

    /**
     * @return mixed
     */
    public function getNomeDoTitular()
    {
        return $this->nomeDoTitular;
    }

    /**
     * @param mixed $nomeDoTitular
     */
    public function setNomeDoTitular($nomeDoTitular)
    {
        $this->nomeDoTitular = $nomeDoTitular;
    }

    /**
     * @param mixed $numeroDaConta
     */
    public function setNumeroDaConta($numeroDaConta)
    {
        $this->numeroDaConta = $numeroDaConta;
    }

    /**
     * @return mixed
     */
    public function getNumeroDaConta()
    {
        return $this->numeroDaConta;
    }

    /**
     * @param mixed $saldo
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    /**
     * @return mixed
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    public function depositar($vl)
    {
        return $this->saldo += $vl;
    }
    public function sacar($vl)
    {
        return $this->saldo -= $vl;
    }
}

$s = new ContaBancaria();
$s->setSaldo(1000);
$s->depositar(100);
echo $s->sacar(100);