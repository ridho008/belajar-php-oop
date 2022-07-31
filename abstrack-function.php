<?php 
require_once 'covariance-and-contravariance.php';

abstract class Animal {
   public string $name;

   // void = tidak mengembalikan data
   // abstract function, tidak boleh ada body didalamnya
   abstract public function run(): void;

   // Contravariance
   abstract public function eat(AnimalFood $animalFood): void;
}

// wajib di override, jika ada abstract function
class Cat extends Animal {
   public function run(): void
   {
      echo "Cat $this->name is running";
   }

   // Covariance
   public function eat(AnimalFood $animalFood): void
   {
      echo "Cat is eating";
   }
}

class Dog extends Animal {
   public function run(): void
   {
      echo "Dog $this->name is running";
   }

   // Contravariance
   public function eat(Food $animalFood): void
   {
      echo "Dog is eating";
   }
}

$cat = new Cat();
$cat->name = "Ketek";
$cat->run();

$cat = new Dog();
$cat->name = "Michel";
$cat->run();