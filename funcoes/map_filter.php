<div class="titulo">Map & Filter</div>

<?php


$notas = [5.8, 7.8, 9.8, 6.7];
$notasFianis1 = [];

foreach($notas as $nota){
    $notasFianis1[] = round($nota);
}

print_r($notasFianis1);

echo '<br>';

$notasFianis2 = array_map("round", $notas);
print_r($notasFianis2);



$apenasOsAprovados = [];

foreach($notas as $nota){
    if($nota >= 7){
        $apenasOsAprovados[] = $nota;
    }
}

echo '<br>';

print_r($apenasOsAprovados);


$apenasOsAprovados2 = [];

$filtroAprovacao = function($nota){
    return $nota >= 7;
};
$apenasOsAprovados2 = array_filter($notas, $filtroAprovacao);

echo '<br>';

print_r($apenasOsAprovados2);

function calculoLegal($nota){
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}

$notaComAcrescimo = array_map("calculoLegal", $notas);
echo '<br>';

print_r($notaComAcrescimo);

?>