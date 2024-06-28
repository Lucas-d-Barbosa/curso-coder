<div class="titulo">Download</div>

<?php
ini_set('display_errors', 0);
session_start();
$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ .  "/../files/";
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$temp = $_FILES['arquivo']['tmp_name'];
if(move_uploaded_file($temp, $arquivo)){
    echo "<br>Arquivo válido e enviado com sucesso.";
    array_push($arquivos, $nomeArquivo);
    $_SESSION['arquivos'] = $arquivos;
} else{
    echo "<br>Erro no upload de arquivo.";
}


?>


<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>
        Enviar
    </button>
</form>

<ul>
    <?php foreach ($arquivos as $arquivo): ?>
        <li>
            <a href="<?=__DIR__."/../files/".$arquivo?>">
                <?=$arquivo?>
            </a>
        </li>
    <?php endforeach ?>
</ul>

<style>
    input,button{
        font-size: 1.2rem;
    }
</style>