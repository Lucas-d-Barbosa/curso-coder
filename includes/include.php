<div class="titulo">Includes</div>


<?php

echo "Executei essa linha do arquivo include<br>";
include('include_arquivo.php');
// include('include_arquivo.php'); // tive que fazer o tratamento de soma para
// ela não ser declarada duas vezes, só assim para que isso rode

echo soma(3, 8) . '!<br>';
echo "O conteúdo da variável é: '{$variavel}'.";
