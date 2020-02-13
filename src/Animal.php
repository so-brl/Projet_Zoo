<?php


namespace App;


abstract class Animal
{
    private $_name;



    /**
     * Animal constructor.
     * @param $_name
     */
    public function __construct($_name)
    {
        $this->_name = $_name;
    }


    // accesseur ( pour acceder a name qui est privée )
    /**
     * @return mixed
     */
    public function getName()
    {
        echo " Je m'appelle " . $this->_name ;
    }


    abstract protected function getNoise() : String ;


    public function type()
    {
        echo ", je suis " .$this->getType();
    }


    public function noise()
    {
        echo " et je fais ".$this->getNoise(). ". ";
    }






}