<?php
include_once('Pessoa.php');
echo "Carregando: Usuario.php<br>";

class Usuario extends Pessoa{
    public $login;

    function __construct($nome, $idade, $login)
    {
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo "Usuário Criado! <br>";
    }

    function __detruct()
    {
        echo "Usuário diz: Tchau!!";
    }

    public function apresentar()
    {   
        return "@{$this->login}: " . parent::apresentar();;        
        
    }
}