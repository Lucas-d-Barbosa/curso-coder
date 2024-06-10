<?php
session_start();



if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $usuarios = [
        [
            "nome" => "Aluno Cod3r",
            "email" => "aluno@cod3r.com.br",
            "senha" => "123",
        ],
        [
            "nome" => "Admin",
            "email" => "a@a",
            "senha" => "1",
        ],
        [
            "nome" => "Outro Aluno",
            "email" => "outroaluno@email.com.br",
            "senha" => "321",
        ]
    ];

    foreach ($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if ($emailValido && $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            $exp = time() + 60 * 60 * 24 * 30;
            setcookie('usuario', $usuario['nome'], $exp);
            header('Location: index.php');
        }
    }

    if (!isset($_SESSION['usuario'])) {
        $_SESSION['erros'] = ['Usuário/Senha inválido!'];
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Curso PHP</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>

<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem-vindo!</h2>
    </header>

    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <?php if (isset($_SESSION['erros']) && is_array($_SESSION['erros'])) : ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro) : ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>


            <form action="#" method="post">
                <div>
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email">
                </div>

                <div>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>
                    Entrar
                </button>
            </form>
        </div>
    </main>

    <footer class="rodape">
        <?= "COD3R & ALUNOS &copy; " . date("d/m/Y"); ?>
    </footer>
</body>

</html>