<?php 
class Student {
   public string $id;
   public string $name;
   public string $value;
   private string $sample;

   // akan menghapus properties yang ada didalam function __clone, sehingga tidak di clone oleh student1 (menyaring yang tidak perlu di clone)
   public function __clone()
   {
      unset($this->sample);
   }
}

$student1 = new Student();
$student1->id = "1";
$student1->name = "Ridho";
$student1->name = "100";

var_dump($student1);

// akan mencloning semua object yang dalam classnya, maupun visibilynya public, protected, maupun private
$student2 = clone $student1;
var_dump($student2);