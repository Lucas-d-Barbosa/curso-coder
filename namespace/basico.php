<?php namespace contexto;?>
<div class="titulo">Exemplo Básico</div>

<?php
echo __NAMESPACE__ . '<br>';
const constante1 = 123;
define('constante2', 234);
define('contexto\constante2', 1234);
define(__NAMESPACE__ . '\constante3', 345);
define('outro_contexto\constante4', 456); // mesmo que o namespace não tenha sido criado

echo constante1 . '<br>';
echo \constante2 . '<br>'; // Diretório raiz do php 
echo constante2 . '<br>'; // pertencente ao namespace atual
// echo contexto\constante3 . '<br>'; // o php pensa que existe um namespace contexto dentro de um outro namespace contexto
// echo \contexto\constante3 . '<br>';  // Aqui acessa o caminho certo
echo constant(__NAMESPACE__ . '\constante3') . '<br>';
echo \outro_contexto\constante4 . '<br>';

function soma($a, $b){
    return $a + $b;
}

echo \contexto\soma(4, 2) . '<br>';

function strpos($str, $text){
    echo "Buscando o texto '{$text}' em '{$str}'<br>";
    return 1;
}
echo strpos("Texto genérico para busca", 'busca') . '<br>';
echo \strpos("Texto genérico para busca", 'busca'). '<br>';