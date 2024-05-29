<div class="titulo">Construtores e Destrutores</div>

<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade = 18)
    {
        echo "Construtor invocado!<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function apresentar(){
        return "Meu nome é $this->nome e eu tenho $this->idade anos!";
    }

    function __destruct()
    {
        echo "E morreu!<br>";
    }

}

$pessoa = new Pessoa("Lucas Barbosa", 21);
$pessoaB = new Pessoa("Luiz Fernando", 19);

echo $pessoa->apresentar() . "<br>";
unset($pessoa);

echo $pessoaB->apresentar() . "<br>";
unset($pessoaB);


?>