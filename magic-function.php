<?php 
class Student {
   public string $id;
   public string $name;
   public string $value;

   // mengkonversikan dari object ke string
   public function __toString(): string
   {
      return "Student id:$this->id, name:$this->name, value:$this->value";
   }

   public function __invoke(...$arguments): void
   {
      $join = join(",", $arguments);
      echo "invoke student with arguments $join";
   }

   public function __debugInfo()
   {
      return [
         "id" => $this->id,
         "name" => $this->name,
         "value" => $this->value,
         "version" => 1.0,
      ];
   }
}

$student1 = new Student();
$student1->id = "1";
$student1->name = "Surya";
$student1->value = "100";

// __toString()
// $string = (string) $student1;
// echo $string;

// __invoke()
// variabelnya bisa dianggap sebagai sebuah function, lalu yang akan dipanggil adalah function __invoke()
// $student1(1, "Ridho", false, "Surya");

// __debugInfo()
// melakukan debug secara detail dan menentukan value yang diinginkan
// var_dump($student1);