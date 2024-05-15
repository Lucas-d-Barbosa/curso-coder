<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>V ou F</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!!true); // not

echo "<p  class='divisao'>Tabela Verdade 'AND' (E):</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

echo '<br>';

var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo '<br>';

echo "<p  class='divisao'>Tabela Verdade 'OR' (OU):</p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

echo '<br>';

var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo '<br>';

echo "<p  class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo):</p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

echo '<br>';

var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p class='divisao'>Exemplo:</p><hr>";
$idade = 60;
$sexo = 'F';

$pagouPrevidencia = true;
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$criterioHomem =  ($idade >= 65 && $sexo === 'M');
$atingiuCriterio = $criterioMulher || $criterioHomem ;
$podeSeAposentar = $pagouPrevidencia &&  $atingiuCriterio;
echo "Pode se aposentar -> {$podeSeAposentar}<br>";
if($podeSeAposentar){
    echo "Pode se aposentar => $sexo";
} else{
    echo 'Vai ter que trabalhar mais um pouco...';
}
?>
