<div class="titulo">Try/Catch</div>

<?php

// echo 7 / 0;
// echo intdiv(7 / 0);

try{
    echo intdiv(7, 0);
}catch(Error $e){
    echo "Tem um erro aqui: ".$e->getMessage() . "<br>";
}

try{
    throw new Exception("Um erro muito estranho aconteceu!");
    echo intdiv(7, 0);
}catch(DivisionByZeroError $e){
    echo "Erro específico: " . $e->getMessage() . "<br>";
} catch(Throwable $e){
    echo "Erro encontrado: " . $e->getMessage() . "<br>";
} finally{
    echo "Sempre Executado!";
}


?>