<?php
// CONTANT = value yang di isi tidak dapat di ubah.
// define("APPLICATION", "Belajar OOP PHP");
// const APP_VERSION = "1.0.0";

// echo APP_VERSION;
// echo APPLICATION;

class Person {
   const AUTHOR = "Ridho Surya";

   var string $name;
   var ?string $address = null;
   var string $country = "Indonesia"; // default value properties

   function __construct(string $name, ?string $address) {
      $this->name = $name;
      $this->address = $address;
   }

   function __destruct() {
      echo "Object person $this->name is destroyed";
   }
}

$person1 = new Person("Surya", "Pekanbaru");
$person2 = new Person("Rudy", "Malang");

echo "Program Selesai.";