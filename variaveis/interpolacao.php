<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero'; // A variável não é mostrada
echo "<br> $numero";

echo "<br>";
$texto = "A sua nota é: $numero";
echo $texto;

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objeto s.";
echo "<br>Eu tenho 5 {$objeto}s.";
echo "<br>Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s";
echo "<br>";
echo "{$numero}";
?>