<?php 

// extends, interface dengan interface BOLEH dari 1 implements
// extendsnya class dengan interface TIDAK BOLEH
interface HasBrand {
   public function getBrand(): string;
}

interface isMaintenance {
   public function isMaintenance(): bool;
}

interface Car extends HasBrand {
   function drive(): void;

   function getTire(): int;
}

// Multiple interface inheritance
class Wuling implements Car, isMaintenance {
   public function drive(): void
   {
      echo "Drive Wuling";
   }

   public function getTire(): int
   {
      return 4;
   }

   public function getBrand(): string
   {
      return "Wuling";
   }

   public function isMaintenance(): bool
   {
      return false;
   }
}

$car = new Wuling();
$car->drive();