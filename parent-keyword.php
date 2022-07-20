<?php

class Shape {
   public function getCorner() {
      return 0;
   }
}

class Rectangle extends Shape {
   public function getCorner() {
      return 4;
   }

   public function getParentCorner() {
      return parent::getCorner();
   }
}


// jika ingin mengakses method dengan nama yang sama di parent class, tetapi ada method nama sama di child class, gunakan keyword parent
$parent = new Shape();
echo $parent->getCorner();

$parent = new Rectangle();
echo $parent->getParentCorner();