<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanFly;

class Dove extends Animal implements CanFly
{

    protected $_noise =" <strong> Rou Rouuu </strong>";

    /**
     * @return String
     */
    protected function getNoise() : String
    {
        return $this -> _noise ;
    }


}