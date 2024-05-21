<div class="titulo">Foreach</div>

<?php
$array = [1 => 'Domingo','Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];        

foreach($array as $dia){
    echo "$dia <br>";
}

echo '<br>';

foreach($array as $indice => $valor){
    echo "$indice => $valor <br>";
}

$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];
echo '<br>';
foreach($matriz as $indice => $valor){
    foreach($valor as $indice2 => $a){
        echo "$indice => $indice2 => $a <br>";
    }
}

$numero =  [1, 2, 3, 4, 5];

foreach($numero as &$dobrar){
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r($numero);
?>