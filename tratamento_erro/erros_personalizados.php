<div class="titulo">Erros Persnolizados</div>

<?php
class FaixaEtariaException extends Exception{
    public function __construct($message,  $code = 0, $previous = null){
        parent::__construct($message, $code, $previous);
    }
  
}

function calcularTempoDeAposentadoria($idade){
    if($idade < 18){
        throw new FaixaEtariaException("Ainda está muito longe!");
    }
    if($idade > 70){
        throw new FaixaEtariaException("Já deveria estar aposentado!");
    }
    return 70 - $idade;
}

$idadesAvaliadas = [15, 30, 60, 80, 6, 20, 40];

foreach($idadesAvaliadas as $idade){
    try{
        echo "Idade: " . $idade .", ". calcularTempoDeAposentadoria($idade) . " anos restantes." . '<br>';
    }catch(FaixaEtariaException $e){ 
        echo $e->getMessage() . '<br>';
    }
}

echo "Fim!";
?>