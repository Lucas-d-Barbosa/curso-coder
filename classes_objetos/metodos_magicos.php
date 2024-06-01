<div class="titulo">Métodos Mágicos</div>

<?php

class Pessoa{
    public $nome;
    public $idade;
    function __construct(String $nome, int $idade)
    {
        echo "Objeto Criado!<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo "Objeto destruído!<br>";
    }

    function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos.<br>";
    }

    public function apresetar(){
        echo $this;
    }

    public function __get($atributo)
    {
        echo "Lendo atributo não declarado: {$atributo}<br>";
    }
    public function __set($atributo, $valor)
    {
        echo "Lendo atributo não declarado - {$atributo}: {$valor}<br>";
    }

    public function __call($name, $arguments)
    {
        echo "Tentando executar método \"{$name}\"."." Parâmetros passados: ";
        print_r($arguments);
    }
}

$a = new Pessoa("Lucas", 21);
echo $a;
$a->apresetar();
$a->nome = "Reinaldo";
$a->apresetar();
$a->nomeCompleto = 'Lucas Barbosa';
$a->nomeCompleto;
$a->exec("Lucas");
echo "<br>";
unset($a);
?>