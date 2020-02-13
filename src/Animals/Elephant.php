<?php


namespace App\Animals;


use App\Animal;

class Elephant extends Animal
{

    protected $_type = "un éléphant";
    protected $_noise ="toooooout";


    protected function getNoise() : String
    {
        return $this -> _noise ;
    }


    public function getType(): string
    {
        return $this->_type;
    }

}