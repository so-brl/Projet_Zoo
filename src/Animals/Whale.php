<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanSwim;

class Whale extends Animal implements CanSwim
{

    protected $_noise ="splash";
    /**
     * @return String
     */

    protected function getNoise() : String
    {
        return $this -> _noise ;
    }


}