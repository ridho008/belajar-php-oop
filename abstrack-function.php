<?php 

abstract class Animal {
   public string $name;

   // void = tidak mengembalikan data
   // abstract function, tidak boleh ada body didalamnya
   abstract public function run(): void;
}

// wajib di override, jika ada abstract function
class Cat extends Animal {
   public function run(): void
   {
      echo "Cat $this->name is running";
   }
}

class Dog extends Animal {
   public function run(): void
   {
      echo "Dog $this->name is running";
   }
}

$cat = new Cat();
$cat->name = "Ketek";
$cat->run();

$cat = new Dog();
$cat->name = "Michel";
$cat->run();