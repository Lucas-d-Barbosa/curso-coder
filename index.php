<?php
session_start();
if($_COOKIE['usuario']){
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Curso PHP</title>
    <link rel="stylesheet" href="assets/css/estilo.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos exercícios</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>

    <main class="principal">
        <div class="conteudo">
            <?= require_once('menu.php') ?>
        </div>
    </main>

    <footer class="rodape">
        <?= "COD3R & ALUNOS &copy; " . date("d/m/Y"); ?>
    </footer>
</body>

</html>