<?php


namespace App;


abstract class Animal
{
    private $_name;

    public function __construct($_name) // Pas besoin car se fait en autonomatique
    {
        $this > name =$_name;
    }


    // accesseur ( pour acceder a name qui est privée )
    private function name()
    {
        return $this ->_name;
    }


    abstract protected function getNoise() : string
    {
        return "Cri de l'animal";
    }


    public function noise()
    {
        return $this->getNoise();
    }


    public function echoData()
    {
        echo "Cet animal est appellé {$this -> _name} ";
    }

}