<div class="titulo">Desafio For</div>

<!-- 
Usar o for...

#
##
###
####
1) Pode usar incremento $1++
2) Não pode usar incremento $1++
 -->
<?php
$a = '#';
for($i = 0; $i < 5; $i++){
    echo $a;
    $a .= "#";
    echo '<br>';
}

echo "<br>";
echo "<hr>";

$a = '#';
for($i = 0; $i < 1;){
    if(mb_strlen($a) > 5) break;
    echo $a;
    $a .= "#";
    echo '<br>';
}


echo "<br>";
echo "<hr>";


for($i = '#'; $i !==  '######'; $i .= '#'){
    echo $i;
    echo '<br>';
}

?>