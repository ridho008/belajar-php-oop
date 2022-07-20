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
   echo "Hello Programmer $programmer->name";
}

$company = new Company();
$company->programmer = new Programmer("Ridho");
var_dump($company);
$company->programmer = new BackendProgrammer("Ridho");
var_dump($company);
$company->programmer = new FrontendProgrammer("Ridho");
var_dump($company);

// Function Argument Polymorphism
// sehingga bisa menggunakan semua turunan class
sayHelloProgrammer(new Programmer("Ridho"));
sayHelloProgrammer(new BackendProgrammer("Ridho"));
sayHelloProgrammer(new FrontendProgrammer("Ridho"));