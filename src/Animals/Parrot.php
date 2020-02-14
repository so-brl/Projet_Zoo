<?php


namespace App\Animals;


use App\Animal;

class Parrot extends Animal
{

    protected $_noise ="coco";

    /**
     * @return String
     */
    protected function getNoise() : String
    {
        return $this -> _noise ;
    }

}