<?php


namespace App\Animals;


use App\Animal;

class ClownFish extends Animal
{

    protected $_noise = '';

    /**
     * @return String
     */

    protected function getNoise() : String
    {
        return $this -> _noise ;
    }




}