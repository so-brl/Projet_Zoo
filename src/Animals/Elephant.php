<?php


namespace App\Animals;


use App\Animal;

class Elephant extends Animal
{

    protected $_noise ="toooooout";

    /**
     * @return String
     */
    protected function getNoise() : String
    {
        return $this -> _noise ;
    }


}