<?php


namespace App;

use App\Interfaces\CanFly;
use App\Interfaces\CanSwim;
use App\Interfaces\CanWalk;

class Zoo
{
    /**
     * @var Enclosure|null $aquarium
     */
    private static $aquarium = null;

    /**
     * @var Enclosure|null $fence
     */
    private static $fence = null;

    /**
     * @var Enclosure|null $aviary
     */
    private static $aviary = null;


    /**
     * @return Enclosure|null
     */
    public static function getAquarium()
    {
        return self::$aquarium;
    }

    /**
     * @return Enclosure|null
     */
    public static function getFence()
    {
        return self::$fence;
    }

    /**
     * @return Enclosure|null
     */
    public static function getAviary()
    {
        return self::$aviary;
    }

    /**
     * @param Animal $animal
     */
    public static function addAnimal(Animal $animal) : void
    {
        if (self::getAquarium() === null) {
            self::$aquarium = new Enclosure();
        }

        if (self::getFence() === null) {
            self::$fence = new Enclosure();
        }

        if (self::getAviary() === null) {
            self::$aviary = new Enclosure();
        }

        if ($animal instanceof CanSwim) {
            self::$aquarium->addAnimal($animal);
        }

        if ($animal instanceof CanWalk) {
            self::$fence->addAnimal($animal);
        }
        if ($animal instanceof CanFly) {
            self::$aviary->addAnimal($animal);
        }
    }

    public static function visitTheZoo() {
        echo "Bienvenue au Zoo ! <br>";
        echo '<br> <br> <br>';
        echo 'Dans la voliaire, vous pouvez voir :  <br>';
        echo self::getAviary()->__toString();
        echo '<br> <br>';
        echo 'Dans l\'aquarium, vous pouvez voir :  <br>';
        echo self::getAquarium()->__toString();
        echo '<br> <br>';
        echo 'Dans la cage , vous pouvez voir :  <br>';
        echo self::getFence()->__toString();


    }



}