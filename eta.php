<?php
//
//interface pessoa
//{
//    public function pessoa($name, $age, $sex);
//}
//class ContaBancaria implements pessoa
//{
//    public $banco;
//    public $nomeTitular;
//    public $numeroAgencia;
//    public $numeroConta;
//    public $saldo;
//
//    public function pessoa($name, $age, $sex)
//    {
//        $this->name = $name;
//        $this->age = $age;
//        $this->sex = $sex;
//    }
//
//    function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo, $name, $age, $sex) {
//        $this->name = $name;
//        $this->age = $age;
//        $this->sex = $sex;
//        $this->banco = $banco;
//        $this->nomeTitular = $nomeTitular;
//        $this->numeroAgencia = $numeroAgencia;
//        $this->numeroConta = $numeroConta;
//        $this->saldo = $saldo;
//    }
//}
//
//$conta = new ContaBancaria('nubank','felipe mateus', '156621','132132','5000','felipe','21','m');
//var_dump($conta);

//Crie uma interface chamada Animal que tenha os métodos comer(), beber() e dormir(). Depois, crie duas classes que implementem essa
//interface: um Gato e um Cachorro. Faça com que essas classes implementem os métodos da interface de forma apropriada para cada animal.

//Atividade 1
//interface Animal
//{
//    public function comer();
//    public function beber();
//    public function dormir();
//}
//
//class Gato implements Animal
//{
//    public function comer()
//    {
//        echo 'O Gato está Comendo';
//    }
//
//    public function beber()
//    {
//        echo 'O gato está bebendo';
//    }
//
//    public function dormir()
//    {
//        echo 'O Gato está dormindo';
//    }
//}
//
//class Cachorro implements Animal
//{
//    public function comer()
//    {
//        echo 'O Cachorro está comendo';
//    }
//
//    public function beber()
//    {
//        echo 'O Cachorro está bebendo';
//    }
//
//    public function dormir()
//    {
//        echo 'O Cachorro está dormindo';
//    }
//}
//
//$gato = new Gato();
//$cachorro = new Cachorro();
//$cachorro->dormir();
//$gato->comer();

//Crie uma classe abstrata chamada Veiculo que tenha os atributos marca e modelo e os métodos ligar() e desligar().
//Depois, crie duas classes que estendam essa classe: um Carro e uma Moto. Faça com que essas classes implementem os métodos da classe
//abstrata de forma apropriada para cada veículo.

//Atividade 2
//abstract class Veiculo
//{
//    protected $marca;
//    protected $modelo;
//
//    abstract function ligar();
//    abstract function desligar();
//}
//
//class Carro extends Veiculo
//{
//    /**
//     * @return mixed
//     */
//    public function getMarca()
//    {
//        return $this->marca;
//    }
//
//    /**
//     * @param mixed $marca
//     */
//    public function setMarca($marca)
//    {
//        $this->marca = $marca;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getModelo()
//    {
//        return $this->modelo;
//    }
//
//    /**
//     * @param mixed $modelo
//     */
//    public function setModelo($modelo)
//    {
//        $this->modelo = $modelo;
//    }
//    public function desligar()
//    {
//        echo 'Desligar Carro';
//    }
//
//    public function ligar()
//    {
//        echo 'Ligar Carro';
//    }
//}
//
//class Moto extends Veiculo
//{
//    public function getMarca()
//    {
//        return $this->marca;
//    }
//
//    public function setMarca($marca)
//    {
//        $this->marca = $marca;
//    }
//
//    public function getModelo()
//    {
//        return $this->modelo;
//    }
//
//    public function setModelo($modelo)
//    {
//        $this->modelo = $modelo;
//    }
//    public function desligar()
//    {
//        echo 'Desligar Moto';
//    }
//
//    public function ligar()
//    {
//        echo 'Ligar Moto';
//    }
//}
//
//$carro = new Carro();
//$carro->setModelo('asda');
//$carro->setMarca('123');
//var_dump($carro);
//$carro->ligar();
//
//$moto = new Moto();
//$moto->setMarca('123');
//$moto->setModelo('sadsa');
//var_dump($moto);
//$moto->desligar();
//
//var_dump($carro->getModelo());

//Crie uma classe chamada Pessoa que tenha os atributos nome, idade e sexo. Faça com que essa classe tenha um
//método construtor que inicialize esses atributos. Depois, crie uma interface chamada Trabalhador que tenha o método trabalhar().
//Faça com que a classe Pessoa implemente essa interface e crie a implementação para o método trabalhar().

//Atividade 3
//interface Trabalhador
//{
//    public function trabalhar();
//}
//class Pessoa implements Trabalhador
//{
//    public $name;
//    public $idade;
//    public $sexo;
//
//    public function __construct($name, $idade, $sexo)
//    {
//        $this->name = $name;
//        $this->idade = $idade;
//        $this->sexo = $sexo;
//    }
//    public function trabalhar()
//    {
//        echo 'A pessoa está trabalhando';
//    }
//}
//
//$pessoa = new Pessoa('felipe','25','masculino');
//$pessoa->trabalhar();
//
//var_dump($pessoa);