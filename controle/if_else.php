<div class="titulo">If Else</div>

<?php

if(true) {
    echo "Serei impresso?<br>";
}

if(true){
    echo "Verdadeiro - Parte A<br>";
    echo "Verdadeiro - Parte B<br>";
} else {
    echo "Falso - Parte A<br>";
    echo "Falso - Parte B<br>";
}

if(10 <= 2){
    echo "Passo A<br>";
} else if(2 <= 2){
    echo "Passo B<br>";
} 
 else if(2 == 2){
    echo "Passo C<br>";
} 
else{
    echo "Último Passo<br>";
}
echo "Fim<br>";

?>