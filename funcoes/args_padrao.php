<div class="titulo">Argumentos Padrões</div>
<?php
function saudacao($nome = "Senhor(a)", $sobrenome = 'Cliente'){
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(NULL, NULL);
echo saudacao('Mestre', 'Supremo');


function anotarPedido($comida, $bebida = 'Água'){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

echo "<br>";
anotarPedido("Hamburguer");
echo "<br>";
anotarPedido("Pizza", "Refrigerante");
echo "<br>";

function anotarPedido2($bebida = 'Água', $comida){
    echo "Para commer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido2('Refrigerante', 'Pizza');
?>