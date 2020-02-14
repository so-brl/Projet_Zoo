<?php


namespace App\Animals;


use App\Animal;
use App\Interfaces\CanWalk;

class Zebra extends Animal implements CanWalk
{

    /**
     * @return String
     */
    protected function getNoise(): String
    {
        return "hiiiii";
    }

}




//class Zebra extends Animal
//{
//
//    protected $_noise ="hiiiii";
//
//    /**
//     * @return String
//     */
//    protected function getNoise() : String
//    {
//        return $this -> _noise ;
//    }
//
//}