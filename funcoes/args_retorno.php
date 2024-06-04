<div class="titulo">Argumentos e Retornos</div>

<?php

function obterMensagem(){
  return 'Seja bem vindo(a)!';  
}
function obterMensagemComNome(String $nome){
    return "Bem-vindo(a), {$nome}!";
}

function soma(float $num1, float $num2){
    $num1++;
    return $num1 + $num2;
}

function trocaValor($a, $novoValor){
    $a = $novoValor;
}
function trocaValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

echo '<br>'. obterMensagem();
$m = '<br>'. obterMensagem();
echo $m ;
echo '<br>';
var_dump(obterMensagem());

echo '<br>'. obterMensagemComNome('Lucas');
echo '<br>'. obterMensagemComNome('Luiz');
echo '<br>'. soma(10, 5);
$a = 4;
$b = 5;
echo '<br>'. soma($a, $b);

$variavel = 1;
trocaValor($variavel, 10);
echo '<br>'. $variavel;


trocaValorDeVerdade($variavel, 10);
echo '<br>'. $variavel;

?>