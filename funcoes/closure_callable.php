<div class="titulo">Closure & Callabe</div>

<?php

$soma1 = function($a, $b){
    return $a + $b;
};

function soma2($a, $b){
    return $a + $b;
}

echo $soma1(2, 3) . '<br>';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>'; // Callable e Closure
echo (is_callable("soma2") ? 'Sim' : 'Não') . '<br>'; // Callable mas não Closure

var_dump($soma1); 
echo '<br>';
var_dump("soma2"); 

?>