<?php 

class Programmer {
   public string $name;

   public function __construct(string $name)
   {
      $this->name = $name;
   }
}

class BackendProgrammer extends Programmer {}
class FrontendProgrammer extends Programmer {}

class Company {
   public Programmer $programmer;
}

// Function Argument Polymorphism
function sayHelloProgrammer(Programmer $programmer)
{
   // pengecekan tipe data
   // apakah suatu object adalah tipe data tertentu atau bukan
   if($programmer instanceof BackendProgrammer) {
      echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
   } else if($programmer instanceof FrontendProgrammer) {
      echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
   } else if($programmer instanceof Programmer) {
      echo "Hello Programmer $programmer->name" . PHP_EOL;
   }
}

// $company = new Company();
// $company->programmer = new Programmer("Ridho");
// var_dump($company);
// $company->programmer = new BackendProgrammer("Ridho");
// var_dump($company);
// $company->programmer = new FrontendProgrammer("Ridho");
// var_dump($company);

// Function Argument Polymorphism
// sehingga bisa menggunakan semua turunan class
sayHelloProgrammer(new Programmer("Ridho"));
sayHelloProgrammer(new BackendProgrammer("Ridho"));
sayHelloProgrammer(new FrontendProgrammer("Ridho"));