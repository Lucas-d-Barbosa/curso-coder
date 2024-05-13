<div class="titulo">Atribuições</div>

<?php
$title = 'Atribuição';

$numero = 10;
echo '<br>' . $numero;

$numero = $numero - 3; 
echo '<br>' . $numero; 

$numero = $numero + 1.5;
echo '<br>' . $numero;
echo '<br>';

echo $numero--; // $numero = $numero - 1;
echo " " . --$numero;  // $numero = $numero - 1;
echo '<br>' . $numero; 

$numero++; // $numero = $numero + 1;
++$numero; // $numero = $numero + 1;

echo '<br>' . $numero;
echo '<br>';
$numero = 20;
$numero -= 5; //  $numero = $numero - 5;
echo $numero;

echo '<br>';
$numero += 5; //  $numero = $numero + 5;
echo $numero;

echo '<br>';
$numero *= 10; //  $numero = $numero * 10;
echo $numero;

echo '<br>';
$numero /= 2; //  $numero = $numero / 2;
echo $numero;

echo '<br>';
$numero %= 6; //  $numero = $numero % 6;
echo $numero;


echo '<br>';
$numero **= 4; //  $numero = $numero ** 4;
echo $numero;

$texto = 'Esse é um texto';
echo '<br>' . $texto;

$texto .= " qualquer"; 
echo '<br>' . $texto;

// $variavelInexistente = 'Valor existente';
// echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor default';
echo '<br>' . $valor;

?>