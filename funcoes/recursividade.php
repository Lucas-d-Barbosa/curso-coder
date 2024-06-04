<div class="titulo">Recursividade</div>


<?php
function fatorial($num){
    if($num === 1) return 1;
    return $num * fatorial($num - 1);
    
}

function soma($num){
    if($num === 1) return 1;
    return $num + soma($num - 1);
}
echo fatorial(5) . '<br>';
echo soma(4) . '<br>';

?>
