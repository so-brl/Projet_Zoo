<?php


namespace App\Animals;


use App\Animal;

class BubbleFish extends Animal
{

    protected $_noise = '';

    protected function getNoise() : String
    {
        return $this -> _noise ;
    }


}