<?php   

// Static keyword, merupakan keyword yang sama dengan constant, static tidak bagian dari object, dia bagian dari class, karena telah ditambahkan keyword (static)
// biasanya digunakan untuk function, yang berfungsi sebagai utilitas disebuah program
class MathHelper {
   // static properties
   static public string $name = "Math Helper";

   // static function
   static public function numbers(int ...$numbers): int
   {
      $total = 0;
      foreach($numbers as $number) {
         $total += $number;
      }
      return $total;
   }
}

// jika ingin membuat properties yang tidak bisa diubah valuenya, gunakan constant, jangan gunakan static
// MathHelper::$name;
// MathHelper::$name = "Ridho";
// echo MathHelper::$name;

$result = MathHelper::numbers(10,10,10);
echo "Result : {$result}";

