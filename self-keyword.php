<?php
// CONTANT = value yang di isi tidak dapat di ubah.
// define("APPLICATION", "Belajar OOP PHP");
// const APP_VERSION = "1.0.0";

// echo APP_VERSION;
// echo APPLICATION;

class Person {
   // CONSTANT
   const AUTHOR = "Ridho Surya";
   // properties/attributes
   // string = properties type declaration, jadi harus string dimasukan datanya, jikalau tidak sesuai akan error
   var string $name;
   var ?string $address = null; // nullable, properties tidak boleh null, gunakan tanda (?) jika ingin value null
   var string $country = "Indonesia"; // default value properties

   function info() {
      // mengakses constant di dalam function class
      return "Author :" . Person::AUTHOR;
   }
}

$person = new Person();
// echo $person->hai("Ridho") . PHP_EOL;

echo $person->info();