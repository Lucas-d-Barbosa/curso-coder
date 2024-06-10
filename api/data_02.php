<div class="titulo">Datas #02</div>

<?php
$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataEHora = '%A, %d de %B de %Y - %H:%M:%S';


$agora = new DateTime();

// print_r($agora);
// echo '<br>';
echo $agora->format($formatoData1) . "<br>";;
setlocale(LC_ALL, ".UTF-8");

$dataFixa = new DateTime('1975-01-25 15:30:50');
echo strftime($formatoDataEHora, $dataFixa->getTimestamp()) . "<br>";

echo strftime($formatoData2, $agora->getTimestamp()) . "<br>";

$amanha = new DateTime('-2 day');
echo strftime($formatoData2, $amanha->getTimestamp())  . "<br>";;



$amanha->modify('+1 day');
echo strftime($formatoDataEHora, $amanha->getTimestamp()) . "<br>";


$amanha->setDate(2001, 9, 11);
echo strftime($formatoDataEHora, $amanha->getTimestamp()) . "<br>";

$dataPassada = new DateTime('2000-05-17');
$dataFutura = new DateTime('2030-11-26');
$outraData = new DateTime('2030-11-26');
echo ($amanha->getTimestamp() > $dataPassada->getTimestamp() ? 'Maior' : 'Menor') . '<br>';
echo ($amanha > $dataFutura ? 'Maior' . '<br>' : 'Menor') . '<br>';
echo ($outraData == $dataFutura ? 'Igual' . '<br>' : 'Diferente') . '<br>';
$tz = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime(null, $tz);
echo $agora->format('d/M/Y H:i:s');
?>