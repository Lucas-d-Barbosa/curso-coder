<div class="titulo">Include & Require</div>

<?php
ini_set('display_errors', 1);
echo 'Usando include com um arquivo inexistente!<br>';
include('arquivo_inexistente.php');
echo 'Usando include com um arquivo inexistente!<br>';

echo 'Usando require com um arquivo inexistente!<br>';
require('arquivo_inexistente.php');


echo 'Não achou mesmo... <br>';
?>