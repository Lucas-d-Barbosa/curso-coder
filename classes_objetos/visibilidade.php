<div class="titulo">Modificadores de Acesso</div>


<?php

class A
{
    public $publico = 'Público';
    protected $protected = 'Protegido';
    private $private = 'Privado';

    public function mostrarA()
    {
        echo "Class A) Publico = {$this->publico} <br>";
        echo "Class A) Protected = {$this->protected} <br>";
        echo "Class A) private = {$this->private} <br>";
    }

    private function naoMostrar()
    {
        echo "Não vou imprimir!";
    }
}

$a = new A();
$a->mostrarA();
// $a->naoMostrar();

echo "<br>";
class B extends A{
    public function mostrarB()
    {
        echo "Class B) Publico = {$this->publico} <br>";
        echo "Class B) Protected = {$this->protected} <br>";
        // echo "Class B) private = {$this->private} <br>";
    }

    
}

$b = new B();
$b->mostrarB();

echo "<br>";

$b->mostrarA();
?>