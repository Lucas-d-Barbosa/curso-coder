<div class="titulo">Sessão</div>
<?php
session_start();
print_r($_SESSION);
echo '<br>';
if(!isset($_SESSION['nome'])){
    $_SESSION['nome'] = 'Lucas';
}
if(!isset($_SESSION['email'])){
    $_SESSION['email'] = 'ozymandias@gmail.com';
}

print_r($_SESSION);

?>

<p>
    <a href='/curso-php/sessao/basico_sessao_alterar.php'>Alterar Sessão</a>
</p>