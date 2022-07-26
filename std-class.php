<?php 


$array = [
   'firstName' => 'Ridho',
   'middleName' => 'Hasa',
   'lastName' => 'Surya'
];

// array menjadi object
$object = (object) $array;
var_dump($object);

echo "First Name $object->firstName";
echo "Middle Name $object->middleName";
echo "Last Name $object->lastName";

// object menjadi array
$arrayLagi = (array) $object;
var_dump($arrayLagi);