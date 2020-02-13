<?php


namespace App\Animals;


use App\Animal;

class Parrot extends Animal
{
    protected $_type = "un perroquet";
    protected $_noise ="coco";


    protected function getNoise() : String
    {
        return $this -> _noise ;
    }


    public function getType(): string
    {
        return $this->_type;
    }
}