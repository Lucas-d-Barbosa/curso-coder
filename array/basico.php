<div class="titulo">Básico de Array</div>

<?php
$lista = array(1, 2, 3.4, 'texto');
// echo $lista . '<br>';
var_dump($lista);

echo '<br>';
print_r($lista);

$lista[0] = 1234;

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
// var_dump($lista[300]);

$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[11]; // Cuidado!
echo '<br>' . mb_substr($texto, 5, 1);
?>