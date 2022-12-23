<?php



interface pessoa
{
    public function pessoa($name, $age, $sex);
}
class ContaBancaria implements pessoa
{
    public $banco;
    public $nomeTitular;
    public $numeroAgencia;
    public $numeroConta;
    public $saldo;

    public function pessoa($name, $age, $sex)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo, $name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }
}

$conta = new ContaBancaria('nubank','felipe mateus', '156621','132132','5000','felipe','21','m');
var_dump($conta);

//Crie uma interface chamada Animal que tenha os métodos comer(), beber() e dormir(). Depois, crie duas classes que implementem essa
//interface: um Gato e um Cachorro. Faça com que essas classes implementem os métodos da interface de forma apropriada para cada animal.

//Atividade 1
interface Animal
{
    public function comer();
    public function beber();
    public function dormir();
}

class Gato implements Animal
{
    public function comer()
    {
        echo 'O Gato está Comendo';
    }

    public function beber()
    {
        echo 'O gato está bebendo';
    }

    public function dormir()
    {
        echo 'O Gato está dormindo';
    }
}

class Cachorro implements Animal
{
    public function comer()
    {
        echo 'O Cachorro está comendo';
    }

    public function beber()
    {
        echo 'O Cachorro está bebendo';
    }

    public function dormir()
    {
        echo 'O Cachorro está dormindo';
    }
}

$gato = new Gato();
$cachorro = new Cachorro();
$cachorro->dormir();
$gato->comer();

//Crie uma classe abstrata chamada Veiculo que tenha os atributos marca e modelo e os métodos ligar() e desligar().
//Depois, crie duas classes que estendam essa classe: um Carro e uma Moto. Faça com que essas classes implementem os métodos da classe
//abstrata de forma apropriada para cada veículo.

//Atividade 2
abstract class Veiculo
{
    protected $marca;
    protected $modelo;

    abstract function ligar();
    abstract function desligar();
}

class Carro extends Veiculo
{
    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function desligar()
    {
        echo 'Desligar Carro';
    }

    public function ligar()
    {
        echo 'Ligar Carro';
    }
}

class Moto extends Veiculo
{
    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function desligar()
    {
        echo 'Desligar Moto';
    }

    public function ligar()
    {
        echo 'Ligar Moto';
    }
}

$carro = new Carro();
$carro->setModelo('asda');
$carro->setMarca('123');
var_dump($carro);
$carro->ligar();

$moto = new Moto();
$moto->setMarca('123');
$moto->setModelo('sadsa');
var_dump($moto);
$moto->desligar();

var_dump($carro->getModelo());

//Crie uma classe chamada Pessoa que tenha os atributos nome, idade e sexo. Faça com que essa classe tenha um
//método construtor que inicialize esses atributos. Depois, crie uma interface chamada Trabalhador que tenha o método trabalhar().
//Faça com que a classe Pessoa implemente essa interface e crie a implementação para o método trabalhar().

//Atividade 3
interface Trabalhador
{
    public function trabalhar();
}
class Pessoa implements Trabalhador
{
    public $name;
    public $idade;
    public $sexo;

    public function __construct($name, $idade, $sexo)
    {
        $this->name = $name;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    public function trabalhar()
    {
        echo 'A pessoa está trabalhando';
    }
}

$pessoa = new Pessoa('felipe','25','masculino');
$pessoa->trabalhar();

var_dump($pessoa);

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