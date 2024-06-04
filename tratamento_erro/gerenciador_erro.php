<div class="titulo">Error Handler</div>
<?php

ini_set('display_errors', 1);
// echo 4 / 0 . '<br>';


error_reporting(E_ERROR); // Só erros graves
// error_reporting(E_ALL); // Todos os erros

error_reporting(~E_ALL); // Nenhum erro
// echo 4 / 0 . '<br>';
include('arquivo_inexistente.php');
echo 'Olá';
echo '<hr>';

error_reporting(E_ALL);

function filtrarMensagem($errno, $errstring){
    $text = 'include';
    return !!strpos(" $errstring", $text);
}

set_error_handler("filtrarMensagem", E_WARNING);
include('arquivo_inexistente.php');

echo '<br>';

restore_error_handler();

?>