<?php


namespace App\Animals;


use App\Animal;

class Whale extends Animal
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