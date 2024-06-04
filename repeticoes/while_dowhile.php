<div class="titulo">While & Do While</div>

<?php
const VALOR_LIMITE = 5;

$contador = 5;
while($contador < VALOR_LIMITE){
    echo "While $contador <br>";
    $contador++;
}

do{
    echo "Do While $contador <br>";
    $contador++;
}while($contador < VALOR_LIMITE);

$contador = 0;

do{
    echo "do-while $contador <br>";
    $contador++;
}while($contador < VALOR_LIMITE);
?>