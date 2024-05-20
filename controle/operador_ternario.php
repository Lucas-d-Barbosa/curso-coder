<div class="titulo">Operador Ternário</div>

<?php
$idade = 60;
$status;

$status = $idade >= 70 ? 'Terceira idade' :
         ($idade >= 18 ? 'Maior de idade' : 'Menor de idade');
echo $status . '<br>';
?>