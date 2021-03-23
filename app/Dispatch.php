<?php
namespace App;

use Src\classes\ClassRouter;

class Dispatch extends ClassRouter
{

    #Atributos;
    private $method; 
    private $Param = [];
    private $Obj;

    #Metodo Contrustor;
    Public function __construct()
    {
        $this->addController();
    }

    #metodo de Edição de Controller;
    public function addController()
    {
        $RotaController = $this->getRota();
        $NameS = "App\\Controller\\{$RotaController}";
        $this->Obj = new $NameS; // OBJ = App\Controller\

    }

}