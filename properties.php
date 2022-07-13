<?php 
class Person {
   // properties/attributes
   // string = properties type declaration, jadi harus string dimasukan datanya, jikalau tidak sesuai akan error
   var string $name;
   var ?string $address = null; // nullable, properties tidak boleh null, gunakan tanda (?) jika ingin value null
   var string $country = "Indonesia"; // default value properties
}

// ini object
$object = new Person();
$object->name = "Ridho";
$object->address = "Jl.Pepaya";
$object->country = "Indonesia";
var_dump($object);

// error
// $object2 = new Person();
// $object2->name = [];
?>