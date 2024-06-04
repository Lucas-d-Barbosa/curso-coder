<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a, $b){
    return $a + $b;
}
echo soma(14, 15) . '<br>';
echo soma(6, 5) . '<br>';

function somaCompleta(...$numeros){
    $soma = 0;
    foreach($numeros as $numero){
        $soma += $numero;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5) . '<br>';
$array = [6, 7, 8];
echo somaCompleta(...$array) . '<br>';

function membros($titular, ...$dependentes){
    echo "Titular: $titular <br>";
    if($dependentes){
        foreach($dependentes as $indice => $dependente){
            $string = "Dependente " . ($indice + 1) .": $dependente <br>";
            echo $string;
        }
    }
}

membros('Francisco Lucas', 'Luiz Fernando', 'João Eduardo');

echo "<br>";

membros('Francisco Lucas');
?>