<?php 

interface Car {
   function drive(): void;

   function getTire(): int;
}

class Wuling implements Car {
   public function drive(): void
   {
      echo "Drive Wuling";
   }

   public function getTire(): int
   {
      return 4;
   }
}

$car = new Wuling();
$car->drive();