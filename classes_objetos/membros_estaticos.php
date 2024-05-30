<div class="titulo">Membros Estáticos</div>

<?php
class A{
    public $naoStatic = "Variável de instância";
    public static $static = "Variável classe (estática)";

   public function mostrarA(){
    echo "Não estático = {$this->naoStatic} <br>";
    // Tentativa 1
    // echo "Estático = {$this->static}";
    // Tentativa 2
    // echo "Estático = {self::$static}"; 
    echo "Estático = " . self::$static; 
    
}

public static function mostrarStaticA(){
    // echo "Não estático = {$this->naoStatic}<br>";
    echo "Estático = " . self::$static; 
   }


}

$objetoA = new A("Olá");
$objetoB = new A("Olá2");
$objetoA->mostrarA();
echo "<br>";
$objetoA::$static = "B";
echo $objetoA::$static;
echo "<br>";
echo $objetoB::$static;
echo "<br>";
$objetoA->mostrarStaticA();
echo "<br>";
A::mostrarStaticA();
?>