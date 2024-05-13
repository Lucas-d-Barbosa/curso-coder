<div class="titulo">Valor X Referência</div>

<?php
$a = "valor inicial";
echo $a;


// Atribuição por valor
$b = $a;
echo "<br>$b";
$b = "novo valor";
echo "<br>$b";

$b++;
echo "<br>$a";
// Atribuição por referência

$c = &$a;
$c = "MESMA REFERÊNCIA.";
echo "<br>$a";
echo " $c";



?>