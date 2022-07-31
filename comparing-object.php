<?php 
class Student {
   public string $id;
   public string $name;
   public string $value;
}

// membandingkan antara kedua object
$student1 = new Student();
$student1->id = "1";
$student1->name = "Surya";
$student1->value = "100";

$student2 = new Student();
$student2->id = "1";
$student2->name = "Surya";
$student2->value = "100";

// equals (==) = mengecek properties apakah sama -> true
var_dump($student1 == $student2);
// identity (===)
// propertiesnya sama, tetapi student1 dan student2 merupakan object yang berbeda, jadi hasilnya false
var_dump($student1 === $student2);

// jika dibandingkan dengan student1 keduanya, maka valuenya adalah true, karena objectnya sama
var_dump($student1 === $student1);