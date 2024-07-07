<div class="titulo">Inserir Registro #01</div>
<?php
require_once "conexao.php";

$sql = "INSERT INTO cadastro 
    (nome, nascimento, email, site, filhos, salario) 
    VALUES (
        'Vitor Sampaio',
        '2003-02-12',
        'vitorsampaio@gmail.com',
        'https://vitorsampaio.sites.com.br',
        0,
        3499.99
    )";
$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso! :)";
} else{
    echo "Erro: " . $conexao->error; 
}

?>