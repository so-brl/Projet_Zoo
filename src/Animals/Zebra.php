<?php


namespace App\Animals;


use App\Animal;

class Zebra extends Animal
{
    protected $_type = "un zèbre";
    protected $_noise ="hiiiii";


    protected function getNoise() : String
    {
        return $this -> _noise ;
    }


    public function getType(): string
    {
        return $this->_type;
    }
}