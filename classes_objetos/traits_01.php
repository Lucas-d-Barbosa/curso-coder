<div class="titulo">Traits #01</div>

<?php
trait validacao{
    public $a = 'Valor a';
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor{
    public $b = 'Valor b';
    private $c = 'Valor (privado)';
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}


class Usuario1{
    use validacaoMelhor, validacao;

    public function imprimirValorC(){
        echo "$this->c";
    }
}

$user = new Usuario1();


var_dump($user->validarStringMelhor("LC12072018"));
echo  "<br>";
var_dump($user->validarStringMelhor("     "));
echo  "<br>";
echo $user->validarStringMelhor("LC12072018");
echo  "<br>";
echo $user->a. "<br>". $user->b . "<br>";
$user->imprimirValorC();
?>