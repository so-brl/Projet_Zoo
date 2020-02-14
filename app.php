<?php

require __DIR__ . '/vendor/autoload.php';

//$animals = [
//    \App\Animals\Fish::class => 5,
//    \App\Animals\BubbleFish::class => 3,
//    \App\Animals\CatFish::class => 2,
//    \App\Animals\ClownFish::class => 1,
//    \App\Animals\Elephant::class => 2,
//    \App\Animals\Zebra::class => 1,
//    \App\Animals\Parrot::class => 10,
//    \App\Animals\Dove::class => 2,
//];
//
//
//foreach ($animals as $key => $value) {
//
//    for ($i = 0; $i < $value; $i++) {
//        $object = new $key('Animal ' . ($i + 1));
//        \App\Zoo::addAnimal($object);
//
//    }
//}


$animalsTeam1 = [
    [5, \App\Animals\Fish::class, 'Poisson'],
    [3, \App\Animals\BubbleFish::class, 'Poisson-Lune'],
    [2, \App\Animals\CatFish::class, 'Poisson-Chat'],
    [1, \App\Animals\ClownFish::class, 'Poisson-Clown'],
    [2, \App\Animals\Elephant::class, 'Eléphant'],
    [1, \App\Animals\Zebra::class, 'Zèbre'],
    [10, \App\Animals\Parrot::class, 'Perroquet'],
    [2, \App\Animals\Dove::class, 'Colombes']
];


function creatTableauAnimals($data)
{
    $animals = [];
    for ($i = 0; $i < count($data); $i++) {
        for ($j = 0; $j < $data[$i][0]; $j++) {
            $animals[$i][$j] = new $data[$i][1]($data[$i][2] .' '. $j);
            \App\Zoo::addAnimal($animals[$i][$j]);
        }
    }
    return $animals;
}

creatTableauAnimals($animalsTeam1);
\App\Zoo::visitTheZoo();


































//require __DIR__ . '/vendor/autoload.php';
////--------------------------------------------------
//
////$poisson1 = new \App\Animals\Fish('Giselle');
////$poisson1-> getName();
////$poisson1-> type();
////$poisson1-> noise();
//echo '<br>';
//
//
//$animals
//
//$animalsTeam1= [
//    [5,\App\Animals\Fish::class,'poisson'],
//    [3,\App\Animals\BubbleFish::class,'poissonLune'],
//    [2,\App\Animals\CatFish::class,'poissonChat'],
//    [1,\App\Animals\ClownFish::class,'poissonClown'],
//    [2,\App\Animals\Elephant::class,'elephant'],
//    [1,\App\Animals\Zebra::class,'zebre'],
//    [10,\App\Animals\Parrot::class,'perroquet'],
//    [2,\App\Animals\Dove::class,'colombes']
//];
//
//function cryingAnimals($data){
//    for ($i = 0; $i < count($data); $i++)
//    {
//        for ($j = 0; $j < count($data[$i]); $j++){
//            ($data[$i][2])->getName();
//            ($data[$i][2])->noise();
//            echo '<br>';
//        }
//    }
//}
//
//function creatTableauAnimals($data)
//{
//    $animals = [];
//    for ($i = 0; $i < count($data); $i++)
//    {
//        for ($j = 0; $j < $data[$i][0]; $j++){
//        $animals[$i][$j] = new  $data[$i][1]($data[$i][2].$j);
//   }
//    }
//    return $animals;
//}
//
//
//
//
//
//$animals= creatTableauAnimals($animalsTeam1);
////var_dump($animals);
////var_dump(creatTableauAnimals($animalsTeam1));
////echo '<br>';
////print_r($animals[1][1]);
////cryingAnimals($animals);
//var_dump(cryingAnimals($animals));
//
//
//
//
