<div class="titulo">
    Desafio Palindromo
</div>

<?php
function isPalindromo(String $word){
    $arr = str_split($word);
    $plv2 = '';
    for($i =  count($arr) - 1; $i >= 0; $i--){
        $plv2 .= $arr[$i];
    }
    if(strtoupper($plv2) === strtoupper($word)){
        return strtoupper($word). " é um palindromo!";
    }
    else{
        return strtoupper($word) . " não é um palindromo!";
    }
}
function isPalindromoTwo(String $word){
    $plv2 = strrev($word);;
    return (strtoupper($plv2) === strtoupper($word) ? strtoupper($word). " é um palindromo!" : strtoupper($word). " não é um palindromo!");
}

echo isPalindromo('arara') .  '<br>';
echo isPalindromoTwo('Ana') .  '<br>';
echo isPalindromoTwo('Bola') .  '<br>';
?>