<?php 
class Zero {
   private array $properties = [];

   // untuk mengambil nilai, jika kalau tidak ada properties, secara otomatis
   public function __get($name)
   {
      return $this->properties[$name];
      // echo "Access Property $name";
      // return "Contoh";
   }

   // jika tidak ada properties yang di buat, secara otomatis php akan menjalankan magic function __set, untuk menambahkan sebuah nilai.
   public function __set($name, $value)
   {
      return $this->properties[$name] = $value;
      // echo "Set property $name with value $value";
   }

   public function __isset($name): bool
   {
      isset($this->properties[$name]);
      // echo "Isset $name";
      // return false;
   }

   public function __unset($name)
   {
      unset($this->properties[$name]);
      // echo "Unset $name";
   }

   // Function Overloading
   // __call = untuk yang dinamis
   public function __call($name, $arguments)
   {
      $join = join(",", $arguments);
      echo "Call function $name with argument $join";
   }

   // __callStatic = untuk yang static
   public static function __callStatic($name, $arguments)
   {
      $join = join(",", $arguments);
      echo "Call Static function $name with argument $join";
   }
}

$zero = new Zero();
// echo $zero->firstName;
// echo $zero->firstName = "Ridho";
// isset($zero->firstName);
// unset($zero->firstName);

// menjadi dinamic properties
$zero->firstName = "Ridho";
$zero->lastName = "Surya";

echo "FirstName : $zero->firstName";
echo "LastName : $zero->lastName";

// secara otomatis akan di buat functionnya melalui function overloading __call dan __callStatic
echo $zero->sayHello("Ridho");
echo $zero::sayHello("Surya");