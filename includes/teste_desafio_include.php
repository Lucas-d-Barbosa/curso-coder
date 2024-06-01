<?php
include_once('Usuario.php');
echo "Carregando: teste_desafio_include.php<br>";

$pessoa1 = new Pessoa("Lucas Barbosa", 21);
$usuario = new Usuario("Hiago Barbosa", 21, 'Calece');
echo $usuario->apresentar();




?>