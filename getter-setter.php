<?php 

class Category {
   private string $name;
   private bool $expensive;

   // : string, function yang mengambalikan tipe data string
   public function getName(): string
   {
      return $this->name;
   }

   public function setName(string $name): void
   {
      // validation, ketika memanggil function setName yang di timpa, tidak akan memunculkan string kosong.
      if(trim($name) != "") {
         $this->name = $name;
      }
   }

   // getter
   public function isExpensive(): bool
   {
      return $this->expensive;
   }

   // setter
   public function setExpensive(bool $expensive): void
   {
      $this->expensive = $expensive;
   }
}

$category = new Category();
$category->setName("Harun");
$category->setExpensive(true);
$category->setName("");

echo "Name : {$category->getName()}";
echo "Expensive : {$category->isExpensive()}";