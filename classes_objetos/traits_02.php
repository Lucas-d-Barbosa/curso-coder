<div class="titulo">Traits #02</div>

<?php
trait validacao{
    public function validarString($str){
        return isset($str) && $str !== "";
    }
}

trait validacaoMelhor{
    public function validarString($str){
        return isset($str) && trim($str);
    }
}

class User{
    use validacaoMelhor, validacao{
        validacaoMelhor::validarString insteadof validacao;
        validacao::validarString as validacaoSimples;
    }
}

$user = new User();
var_dump($user->validarString(' '));
echo "<br>";
var_dump($user->validacaoSimples(' '));

?>