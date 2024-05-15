<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p>V ou F</p>";
var_dump(true);
echo '<br>';
var_dump(!!true); // not

echo "<p>Tabela Verdade 'AND' (E):</p><hr>";
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

echo "<p>Tabela Verdade 'OR' (OU):</p><hr>";
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

echo "<p>Tabela Verdade 'XOR' (OU Exclusivo):</p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

echo '<br>';

var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

?>

<style>
    p{
        margin-bottom: 5px;
        font-weight: 700;
    }
    hr{
        margin-top: 0px;
    }
</style>