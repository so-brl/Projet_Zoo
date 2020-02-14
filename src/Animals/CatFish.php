<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanSwim;

class CatFish extends Animal implements CanSwim
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