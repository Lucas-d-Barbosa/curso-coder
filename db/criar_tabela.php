<div class="titulo">Criar Tabela</div>

<?php

require_once "conexao.php";


// DDL - Data Definition Language.
$sql = "CREATE TABLE IF NOT EXISTS cadastro(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nascimento DATE,
    email varchar(100) NOT NULL,
    site varchar(100),
    filhos INT,
    salario FLOAT
)";

$conexao = novaConexao();

$resultado = $conexao->query($sql);
if($resultado){
    echo "Sucesso! :)";
}else{
    echo "Erro: " . $conexao->error;
}
echo $conexao->error;
$conexao->close();

?>