<div class="titulo">Classe Data</div>

<?php
class Data{
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){
        return "{$this->apresentarDia()}/{$this->apresentarMes()}/$this->ano";
    }

    public function apresentarDia(){
        return $this->dia >= 10 ? $this->dia : "0$this->dia";
    }

    public function apresentarMes(){
        return $this->mes >= 10 ? $this->mes : "0$this->mes";
    }
}

$d1 = new Data();
$d1->dia = 11;
$d1->mes = 7;
$d1->ano = 2024;
echo $d1->apresentar() . '<br>';

?>