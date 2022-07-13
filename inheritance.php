<?php 

class Manager {
   var string $name;

   // void, artinya tidak mengembalikan value
   function sayHello(string $name) : void {
      echo "Hello $name, may name is $this->name ";
   }
}

class VisePresident extends Manager {

}

$manager = new Manager();
$manager->name = "Tony";
$manager->sayHello('Hello Buddy');

$vs = new VisePresident();
$vs->name = "Jaki";
$vs->sayHello("SSSS");