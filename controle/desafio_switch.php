<div class="titulo">Desafio Switch Case</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">
            KM/Milha
        </option>
        <option value="milha-km">
            Milha/KM
        </option>
        <option value="metro-km">
            Metro/KM
        </option>
        <option value="km-metro">
            KM/Metro
        </option>
        <option value="celsius-fah">
            Celsius/Fahrenheit
        </option>
        <option value="fah-celsius">
            Fahrenheit/Celsius
        </option>
    </select>

    <button>Enviar</button>

</form>
<style>
    form>* {
        font-size: 1.8rem;
    }
</style>


<?php
if (isset($_POST['param'])  && is_numeric($_POST['param'])) {
    $valorConversao = $_POST['param'];
    $conversao = $_POST['conversao'];
    $valorConvertido;
    $str;
    switch (strtolower($conversao)) {
        case 'km-milha':
            $valorConvertido = $valorConversao *  0.62137119;
            $valorConvertido = number_format($valorConvertido, 3, ',', '.');
            $str = "{$valorConversao} km é igual a $valorConvertido milhas";
            break;
        case 'milha-km':
            $valorConvertido = $valorConversao /  0.62137119;
            $valorConvertido = number_format($valorConvertido, 3, ',', '.');
            $str = "{$valorConversao} milhas é igual a $valorConvertido km";
            break;
        case 'metro-km':
            $valorConvertido = $valorConversao /  1000;
            $valorConvertido = number_format($valorConvertido, 3, ',', '.');
            $str = "{$valorConversao} metros é igual a $valorConvertido km";
            break;
        case 'km-metro':
            $valorConvertido = $valorConversao *  1000;
            $valorConvertido = number_format($valorConvertido, 3, ',', '.');
            $str = "{$valorConversao} km é igual a $valorConvertido metros";
            break;
        case 'celsius-fah':
            $valorConvertido = ($valorConversao * 1.8 + 32);
            $valorConvertido = number_format($valorConvertido, 3, ',', '.');
            $str = "{$valorConversao} Celsiu é igual a $valorConvertido Fahrenheit";
            break;
        case 'fah-celsius':
            $valorConvertido = ($valorConversao - 32) / (9 / 5);
            $valorConvertido = number_format($valorConvertido, 3, ',', '.');
            $str = "{$valorConversao} Fahrenheit é igual a $valorConvertido Celsiu";
            break;
    }
    echo $str;
} else {
    $str = 'Valores inválidos!';
    echo $str;
}

?>