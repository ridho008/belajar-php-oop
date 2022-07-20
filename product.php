<?php 

namespace Produk;

class Product {
   // private = hanya di akses dalam class
   // protected = mengakses dalam class dan turunan class
   // public = bisa diakses dimana saja
   protected string $name;
   protected int $price;

   public function __construct(string $name, string $price) {
      $this->name = $name;
      $this->price = $price;
   }

   public function getName() : string {
      return $this->name;
   }

   public function getPrice() : string {
      return $this->price;
   }
}

class ProductDummy extends Product {
   public function info() {
      echo "Name $this->name" . PHP_EOL;
      echo "Price $this->price" . PHP_EOL;
   }
}
