<div class="titulo">Funções e Escopo</div>

<?php

function imprimirMensagem() : void{
    echo "Olá, mundo! ";
    echo "Até a próxima! <br>";
}

imprimirMensagem();
echo "<br>";
$variavel = 1;
function trocaValor(){
    $variavel = 2;
    echo "Durante a função:  $variavel <br>";
}
echo "Antes da função:  $variavel <br>";
trocaValor();
echo "Depois da função:  $variavel <br>";

function trocaValorDeVerdade(){
    global $variavel;
    $variavel = 4;
    echo "Durante a função:  $variavel <br>";
}

echo "<br>";

echo "Antes da função:  $variavel <br>";
trocaValorDeVerdade();
echo "Depois da função:  $variavel <br>";

echo "<br>";

var_dump(trocaValorDeVerdade());
?>