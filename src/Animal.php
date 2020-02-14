<?php


namespace App;


abstract class Animal
{


    /**
     * @var String $name
     */
    private $name;

    /**
     * Animal constructor.
     *
     * @param String $name
     */
    public function __construct(String $name)
    {
        $this->name = $name;
    }

    /**
     * @return String
     */
    abstract protected function getNoise() : String;

    /**
     * @return String
     */
    public function noise() : String
    {
        return $this->getNoise();
    }

    /**
     * @return String
     */
    public function getName(): String
    {
        return $this->name;
    }

}
//    /**
//     * @var String $name
//     */
//    private $_name;
//
//
//    /**
//     * Animal constructor.
//     * @param String $name
//     */
//    public function __construct(String $name)
//    {
//        $this->name = $name;
//    }
//
//
//
//    /**
//     * @return String
//     */
//    public function getName(): String
//    {
//        return $this->_name;
//    }
//
//
//    /**
//     * @return String
//     */
//    abstract protected function getNoise() : String ;
//
//
//    /**
//     * @return String
//     */
//    public function noise()
//    {
//        return  $this->getNoise();
//    }





