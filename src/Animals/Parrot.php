<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanFly;

class Parrot extends Animal implements CanFly
{

    protected $_noise ="<strong> coco</strong>";

    /**
     * @return String
     */
    protected function getNoise() : String
    {
        return $this -> _noise ;
    }

}