<div class="titulo">Desafio dos 7 erros</div>

<!--  Forma errada
//<?php

// interface Template{
//     function metodo1();
//     public function metodo2($parametro);
// }

// abstract class ClasseAbstrata extends Template{
//     public function metodo3(){
//         echo "Estou funcionando!";
//     }
// }

// class ClasseConcreta implements ClasseAbstrata{
//     function __construct($parametro)
//     {
        
//     }
// }


// $exemplo = Classe();
// $exemplo.metodo3();
// ?> -->

<?php

interface Template{
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template{
    public function metodo3(){
        echo "Estou funcionando!";
    }
}

class ClasseConcreta extends ClasseAbstrata{
    function __construct($parametro)
    {
        
    }

    public function metodo1()
    {
        
    }

    public function metodo2($parametro)
    {
        
    }
}


$exemplo = new ClasseConcreta("A");
$exemplo->metodo3();
?>