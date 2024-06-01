<div class="titulo">Include_once</div>
<?php

include('include_once_arquivo.php');
// require('include_once_arquivo.php');

echo "Variável = '{$variavel}'. <br>";
$variavel = 'Variável alterada';
echo "Variável = '{$variavel}'. <br>";

include('include_once_arquivo.php'); // recarregou a variável para seu valor no arquivo include_once_arquivo.php
echo "Variável = '{$variavel}'. <br>";

$variavel = 'Variável alterada';
echo "Variável = '{$variavel}'. <br>";


include_once('include_once_arquivo.php'); // valores continuam o mesmo pois o arquivo não foi recarregado
echo "Variável = '{$variavel}'. <br>";
