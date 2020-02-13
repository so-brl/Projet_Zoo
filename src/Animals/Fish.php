<?php


namespace App\Animals;


use App\Animal;

class Fish extends Animal
{
    protected function getNoise() : String
    {
        return $this -> bruit = "bloubloublou" ;
    }


    public function getType(): string
    {
        return $this -> type = "un poisson";
    }

}


