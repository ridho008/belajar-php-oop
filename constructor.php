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
}

$person = new Person("Surya", "Pekanbaru");
var_dump($person);