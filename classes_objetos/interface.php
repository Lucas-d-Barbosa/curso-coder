<div class="titulo">Interface</div>

<?php
interface Animal {
    function respirar();
}

interface Mamifero {
    function mamar();
}

interface Canino extends Animal, Mamifero{
    function latir() : String;
    function correr();
}

interface Felino{
    function correr();
}

class Cachorro implements Canino{
    function respirar()
    {
        return "Irei usar oxigênio!<br>";
    }

    function latir() : String {
        return "Wolf!<br>";
    }

    function mamar(){
        return "Irei usar leite!<br>";
    }

    function correr(){
        return "Vrummm<br>";
    }
}

$animal = new Cachorro();
echo $animal->respirar();
echo $animal->latir();
echo $animal->mamar();
echo $animal->correr();

echo "<br>";
var_dump($animal);

echo "<br>";
var_dump($animal instanceof Cachorro); // True
var_dump($animal instanceof Canino); // True
var_dump($animal instanceof Mamifero); // True
var_dump($animal instanceof Animal); // True
var_dump($animal instanceof Felino); // False

?>