<?php  namespace TratamentoErro;?>

<div class="titulo">Desafio IntDiv</div>

<?php
class IntDivException extends \Exception{
    public function __construct($message, $code = 0, $previous = null){
        parent::__construct($message, $code, $previous);
    }
}
function intdiv($num1, $num2){
    try{
        if($num2 == 0){
            throw new IntDivException("Erro ao tentar divir por zero!");
        }

        if($num1 % $num2 !== 0){
            throw new IntDivException("Resultado da divisão não é inteiro!");
        }

        return $num1 / $num2;
    } catch(IntDivException $e){
        echo $e->getMessage();
    }
}

echo \TratamentoErro\intdiv(8, 3) . '<br>';
echo \intdiv(8, 3) . '<br>';


?>
