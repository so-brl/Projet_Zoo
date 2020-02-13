<?php


namespace App\Animals;


use App\Animal;

class Dove extends Animal
{
    protected $_type = "une colombe";
    protected $_noise ="Rou Rouuu";


    protected function getNoise() : String
    {
        return $this -> _noise ;
    }


    public function getType(): string
    {
        return $this->_type;
    }
}