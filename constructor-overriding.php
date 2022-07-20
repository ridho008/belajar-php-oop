<?php

class Manager {
   public string $name;
   public string $title;

   public function __construct(string $name = "", string $title = "Manager")
   {
      $this->name = $name;
      $this->title = $title;
   }

   // contoh dari penggunaan menghilangkan parameter
   public function sayHello(string $name): void
   {
      echo "Hi $name, my name is $this->name";
   }
}

class VisePresident extends Manager {
   public function __construct(string $name = "")
   {
      // tidak wajib, tetapi di rekomendasikan
      parent::__construct($name, "vp");
   }

   public function sayHello(string $name): void
   {
      echo "HI, my name is VP $this->name";
   }
}

// mengubah dari yang ada parameter, menjadi tidak. sehingga terjadi error
$manager = new Manager();
$manager->sayHello('Tony');

$vp = new VisePresident();
$vp->sayHello('Tony');