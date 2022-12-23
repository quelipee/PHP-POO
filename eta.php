<?php

//Crie uma interface chamada Produto que possui os métodos getNome(), getPreco() e getCategoria().
//Em seguida, crie uma classe chamada LojaVirtual que possui um array de produtos e os métodos adicionarProduto(), removerProduto() e
//listarProdutos(). A classe LojaVirtual deve permitir adicionar e remover produtos do array e listar todos os produtos adicionados.

interface Produto
{
    public function getNome();
    public function getPreco();
    public function getCategoria();
}

Class LojaVirtual
{
    private $produtos = [];

    public function adicionarProduto(Produto $produto)
    {
        $this->produtos[] = $produto;
    }

    public function removerProduto($nome)
    {
        foreach ($this->produtos as $key => $produto)
        {
            if ($produto->getNome() == $nome)
            {
                unset($this->produtos[$key]);
                break;
            }
        }
    }

    public function listarProdutos()
    {
        foreach ($this->produtos as $produto)
        {
            echo 'Nome: '.$produto->getNome().' | Preço: '.$produto->getPreco().' | Categoria: '.$produto->getCategoria().PHP_EOL;
        }
    }
}

class Livro implements Produto
{
    private $nome;
    private $preco;
    private $categoria;

    public function __construct($nome, $preco, $categoria)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->categoria = $categoria;
    }


    public function getNome()
    {
        return $this->nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
}

class Computador implements Produto
{
    private $name;
    private $categoria;
    private $preco;

    public function __construct($name, $categoria, $preco)
    {
        $this->name = $name;
        $this->categoria = $categoria;
        $this->preco = $preco;
    }

    public function getPreco()
    {
        return $this->preco;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getNome()
    {
        return $this->name;
    }
}

$loja = new LojaVirtual();
$livro1 = new Livro('Livro 1', 20, 'Livros');
$livro2 = new Livro('Livro 2', 30, 'Livros');
$cpu = new Computador('intel', 'eletrônico',5000);

$loja->adicionarProduto($livro1);
$loja->adicionarProduto($cpu);
echo $loja->listarProdutos();