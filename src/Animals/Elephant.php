<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanWalk;

class Elephant extends Animal implements CanWalk
{

    protected $_noise ="<strong> toooooout</strong>";

    /**
     * @return String
     */
    protected function getNoise() : String
    {
        return $this -> _noise ;
    }


}