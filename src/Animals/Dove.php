<?php


namespace App\Animals;


use App\Animal;

class Dove extends Animal
{

    protected $_noise ="Rou Rouuu";

    /**
     * @return String
     */
    protected function getNoise() : String
    {
        return $this -> _noise ;
    }


}