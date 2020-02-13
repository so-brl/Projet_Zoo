<?php


namespace App\Animals;


use App\Animal;

class Whale extends Animal
{
    protected $_type = "une baleine";
    protected $_noise ="splash";


    protected function getNoise() : String
    {
        return $this -> _noise ;
    }


    public function getType(): string
    {
        return $this->_type;
    }
}