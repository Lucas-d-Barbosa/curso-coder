<div class="titulo">Primeira Classe</div>

<?php
class Cliente{
    // Atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    function apresentar(){
        return "Olá! Meu nome é $this->nome e tenho $this->idade anos!<br>";
    }
}

$c1 = new Cliente();
$c1->nome = 'Lucas Barbosa';
$c1->idade = 21;
echo $c1->apresentar();

$c2 = new Cliente();
$c2->nome = 'Lucas Santos';
$c2->idade = 22;
echo $c2->apresentar();


?>