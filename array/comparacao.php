<div class="titulo">Comparação Entre Arrays</div>

<?php

$arr1 = ['nome' => 'maria', 'idade' => 20];
$arr2 = ['nome' => 'maria', 'idade' => 20];

var_dump($arr1 == $arr2); // True
var_dump($arr1 === $arr2); // True

$arr3 = ['idade' => 20, 'nome' => 'maria'];
echo '<br>';
var_dump($arr1 == $arr3); // True
var_dump($arr1 === $arr3); // False
var_dump($arr1 != $arr3); // False
var_dump($arr1 !== $arr3); // True


echo '<br>';
$arr4 = ['idade' => '20', 'nome' => 'maria'];
var_dump($arr1 == $arr4); // True
var_dump($arr1 === $arr4); // False

echo '<br>';
$arr5 = ['idade' => '20', 'nome' => 'maria', 3];
var_dump($arr1 == $arr5); // False
var_dump($arr1 != $arr5); // True
 
?>