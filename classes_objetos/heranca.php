<div class="titulo">Herança</div>
<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Pessoa Criada! <br>";
    }

    function __destruct()
    {
        echo "Pessoa diz: Tchau!!";
    }

    public function apresentar(){
        return "{$this->nome},{$this->idade} anos<br>";
    }
}

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

$pessoa1 = new Pessoa("Lucas Barbosa", 21);
$usuario = new Usuario("Hiago Barbosa", 21, 'Calece');
echo $usuario->apresentar();


?>