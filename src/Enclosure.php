<?php


namespace App;


class Enclosure
{
    /**
     * @var Animal[] $animals
     */
    public $animals;

    /**
     * @param Animal $animal
     */
    public function addAnimal(Animal $animal) : void
    {
        $this->animals[] = $animal;
    }

    /**
     * @return String
     */
    public function __toString() : String
    {
        foreach ($this->animals as $animal) {
            echo "- Je suis ".$animal->getName() .' ' .  $animal->noise() . '<br>';
        }

        return '';
    }
}