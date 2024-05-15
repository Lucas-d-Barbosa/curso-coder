<div class="titulo">Desafio PI</div>

<?php
echo pi();
$pi = 3.14;
echo "<br>";
var_dump($pi);
echo "<br>";
var_dump(pi());

if($pi === pi()){
    echo "<br>Iguais!";
} else{
    echo "<br>Diferentes!";
}

// Operador Realacional
$piErrado = 2.8;

echo "<br>" . (pi() - $pi);
echo "<br>"; 
if(pi() - $piErrado <= 0.0015){
    echo "Iguais!";
}else{
    echo "Diferentes!";
}
