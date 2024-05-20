<div class="titulo">Desafio Sorteio</div>
<style>
    [center]{
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<?php
$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];
$posicao = array_rand($nomes);
echo "<div center><h1>$nomes[$posicao]</h1></div>";



?>