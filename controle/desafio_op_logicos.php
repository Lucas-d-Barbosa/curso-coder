<div class="titulo">Desafio Operadores Lógicos</div>
<!-- 
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50 e Sorvete
    - Se um dos dois forem executados -> TV 32 e Sorvete
    - Se nenhum dos dois forem executados -> Mais saudável
 -->
<form action="#" method="POST">
    <div>
        <label for="t1">Trabalho 1 (Terça): </label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta): </label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>

    <button>Executar</button>
</form>

<style>
    button,select{
        font-size: 1.8rem;
    }
</style>

<?php
if(isset($_POST['t1']) && isset($_POST['t2'])){
    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];
    $criterioUm = (bool)$t1;
    $criterioDois = (bool)$t2;
    $TV50 = $criterioUm && $criterioDois;
    $TV32 = ($criterioUm xor $criterioDois);
    $saudavel = !$TV50 && !$TV32;
    if($TV50){
        echo "Vamos comprar uma TV de 50 polegadas e um sorvete!";
    } else if($TV32){
        echo "Vamos comprar uma TV de 32 polegadas e um sorvete!";
    } else{
        echo "Não vamos comprar nenhuma televisão, mas seremos saudáveis!!";
    } 
}



?>