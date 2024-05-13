<div class="titulo">Variáveis Variáveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA';

$$a = 'valorAA';


echo "$a {$$a} {$valorA}";

$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!!';
echo '<br>';

echo "$epa {$$epa} {$$$epa}";
?>