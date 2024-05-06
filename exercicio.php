<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Exercício</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização dos exercícios</h2>
    </header>
    <nav class="navegacao">
        <a href=<?="{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
           <?php
                // include($_GET['dir'] . "/" . $_GET['file'] . ".php");
                include("{$_GET['dir']}/{$_GET['file']}.php")
            ?>
        </div>
    </main>

    <footer class="rodape">
         <?= "COD3R & ALUNOS &copy; " . date("d/m/Y");?>
    </footer>
</body>

</html>