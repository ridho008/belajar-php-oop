<?php

interface HelloWorld {
   function sayHello(): void;
}

// Biasanya
// class Sample implements HelloWorld {
//    public function sayHello()
//    {
//       return "Hello World"
//    }
// }

// Anonymous Class
$helloWorld = new class("Ridho") implements HelloWorld {
   public string $name;

   public function __construct(string $name)
   {
      $this->name = $name;
   }

   public function sayHello()
   {
      return "Hello $this->name";
   }
}

$helloWorld->sayHello();