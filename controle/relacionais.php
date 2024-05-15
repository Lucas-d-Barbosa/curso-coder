<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); // true
var_dump(1 > 1); // false
var_dump(1 >= 1); // true
var_dump(4 < 23); // true
var_dump(1 <= 7); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); // false

var_dump(111 == '111'); // true
var_dump(111 === '111'); // false
var_dump(111 != '111'); // false
var_dump(111 !== '111'); // true

echo "<p>Relacionais no If/Else<p><hr>";

$idade = 25;
if($idade < 18){
    echo "Menor de idade = $idade anos<br>";
}else if($idade <= 65){
    echo "Adulto = $idade anos<br>";
}else{
    echo "Terceira idade = $idade anos<br>";
}
echo "<p>Spaceship<p><hr>";
var_dump(5 <=> 3);
var_dump(5 <=> 5);
var_dump(3 <=> 5);


echo "<p>Valores podem ser V ou F!<p><hr>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");

?>

<style>
    p{
        margin: 20px 0px;
        margin-bottom: -15px;
    }
    hr{
        margin-top: 0px;
    }
</style>