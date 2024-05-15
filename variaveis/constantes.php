<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
// echo '<br>' . $TAXA_DE_JUROS . '!'; Não usa o $

const NOVA_TAXA = 2.5;
echo '<br>';
echo NOVA_TAXA;

$valorVariavel = 2.8;
// const NOVISSIMA_TAXA1 = $valorVariavel; Isso gera erro! Não se atribui uma variavel a uma constante;
define('NOVISSIMA_TAXA1', $valorVariavel); // Dessa forma não se gera erro!
const NOVISSIMA_TAXA2 = 2.8 + 1.2; //Isso é permitido
echo '<br>' . NOVISSIMA_TAXA2;


echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;
echo '<br> Linha: ' . __LINE__;
echo '<br> Arqivo: ' . __FILE__;
echo '<br> Arqivo: ' . __DIR__;

?>


