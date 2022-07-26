<?php 
// membuat iteration secara manual, tanpa implements IteratorAggregate otomatis
class Data implements IteratorAggregate {
   var string $first = "First";
   public string $second = "Second";
   private string $third = "Third";
   protected string $forth = "Forth";

   // public function getIterator()
   // {
   //    $array = [
   //       "first" => $this->first,
   //       "second" => $this->second,
   //       "third" => $this->third,
   //       "forth" => $this->forth,
   //    ];

   //    $iterator = new ArrayIterator($array);
   //    return $iterator;
   // }

   // menggunakan keyword yield
   public function getIterator()
   {
      yield "first" => $this->first;
      yield "second" => $this->second;
      yield "third" => $this->third;
      yield "forth" => $this->forth;
   }
}

$data = new Data();

// akan menampilkan properties yang visibility public, jika menggunakan IteratorAggregate
foreach($data as $properties => $value) {
   echo "$properties : $value";
}