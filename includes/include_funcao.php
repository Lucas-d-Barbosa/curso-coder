<div class="titulo">Include Função</div>

<?php
echo 'Carregando: include_funcao<br>';

function carregarArquivo(){
    include('include_arquivo.php');
    echo $variavel . '<br>';
    echo soma(2, 5) . '!<br>';
}

echo 'Novamente no arquivo include_funcao<br>';
// echo soma(1, 8) . '!<br>'; // Antes de chamar a função arquivo isso não é possível
carregarArquivo();
// echo "Variável = '{$variavel}'"; // Não tenho acesso ao escopo da função, logo, essa variável não existe aqui
echo soma(1, 8) . '!<br>'; // Depois de chamar a função arquivo isso é possível
?>
