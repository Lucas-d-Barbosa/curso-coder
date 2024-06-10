<div class="titulo">Ler de Arquivo</div>
<?php
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 67);
echo '<br>';
fclose($arquivo);

echo '<br>';

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo $tamanho, '<br>';
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)){
    echo fgets($arquivo) , '<br>' ;
}
echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)){
    echo fgetc($arquivo) ;
}
echo '<br>';
fclose($arquivo);



echo '<hr>';
$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "\nAdicionado durante a leitura do arquivo!");
fclose($arquivo);
?>