<?php

class Person {
   // properties/attributes
   // string = properties type declaration, jadi harus string dimasukan datanya, jikalau tidak sesuai akan error
   var string $name;
   var ?string $address = null; // nullable, properties tidak boleh null, gunakan tanda (?) jika ingin value null
   var string $country = "Indonesia"; // default value properties

   // $this, berfungsi sebagai mengakses object saat ini yaitu $person
   function hai(?string $name) {
      if(is_null($name)) {
         echo "My name is $this->name";
      } else {
         echo "Hai $name, My name is $this->name";
      }
   }
}

$person = new Person();
$person->name = "Naby Keita";
echo $person->hai("Ridho");