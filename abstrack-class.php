<?php 
namespace Data;

// abstrack class, tidak bisa dibuat sebuah object, maka dari itu gunakan child classnya
abstract class Location {
   public string $name;
}

class City extends Location {}
class Province extends Location {}
class Country extends Location {}

$city = new City();
$province = new Province();
$country = new Country();