<?php

class Person {
   // properties/attributes
   // string = properties type declaration, jadi harus string dimasukan datanya, jikalau tidak sesuai akan error
   var string $name;
   var ?string $address = null; // nullable, properties tidak boleh null, gunakan tanda (?) jika ingin value null
   var string $country = "Indonesia"; // default value properties

   function hai(string $nama) {
      return "$nama";
   }
}

$person = new Person();
echo $person->hai("Ridho");