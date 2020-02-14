<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanSwim;

class BubbleFish extends Animal implements CanSwim
{

    protected $_noise = '';

    protected function getNoise() : String
    {
        return $this -> _noise ;
    }


}