<div class="titulo">Mapa PHP</div>

<?php
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);

echo '<br>' . $dados['idade'];
echo '<br>' . $dados['cor'];
echo '<br>' . $dados['peso'];
// var_dump($dados['outras_informações']); 

$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 =>"f",
    "g",
    8 => "h"
    

);

echo '<br>';
print_r($lista);

// $lista = 1; isso sobrescreve o array
$lista[] = 1; // isso adiciona 1 ao array
echo '<br>';
print_r($lista);

$lista['vinte'] = 'j';
echo '<br>';
print_r($lista);

$lista[false] = 'Tentei indexar com false!'; // Sobrescreve o index 0
echo '<br>';
print_r($lista);

$lista[true] = 'Tentei indexar com true!'; // Sobrescreve o index 1
echo '<br>';
print_r($lista);
?>