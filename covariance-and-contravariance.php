<?php 

require_once 'abstrack-function.php';

interface AnimalShelter
{
   function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter {
   public function adopt(string $name): Cat
   {
      $cat = new Cat();
      $cat->name = $name;
      return $cat;
   }
}

class DogShelter implements AnimalShelter {
   public function adopt(string $name): Dog
   {
      $dog = new Dog();
      $dog->name = $name;
      return $dog;
   }
}

// covariance
// memungkinkan meng-override return function yang di parent dengan return value yang lebih spesifik
// $catShelter = new CatShelter();
// $cat = $catShelter->adopt("Tony");

// $dogShelter = new DogShelter();
// $dog = $dogShelter->adopt("Pitbull");

// Contravariance
// yang lebih tidak spesifik
class Food {

}

class AnimalFood extends Food {

}

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Tony");
$cat->eat(new AnimalFood());

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Pitbull");
$dog->eat(new Food());