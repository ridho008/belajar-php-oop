

<?php 

// Jika parent classnya akan override dengan trait
// Jika trait akan override dengan child classnya
class ParentClass {
   public function goodBye(?string $name): void
   {
      echo "Goodbye in Person";
   }

   public function hello(?string $name): void
   {
      echo "Hello in Person";
   }
}

trait SayGoodBye
{
   public string $name;
   function goodBye(?string $name): void
   {
      if(is_null($name)) {
         echo "Good Bye";
      } else {
         echo "Good Bye {$name}";
      }
   }
}

trait SayHello
{
   public string $name;
   function hello(?string $name): void
   {
      if(is_null($name)) {
         echo "Hello";
      } else {
         echo "Hello {$name}";
      }
   }
}

// bisa juga menambahkan sebuah properties kedalam trait, perilakunya sama dengan abstrack class.
trait HasName {
   public string $name;
}

trait CanRun {
   abstract function run(): void;
}

// sehingga function sayHello dan SayGoodBye, bisa digunakan oleh class person, sama hal dengan konsepnya extensions
class Person extends ParentClass {
   use SayHello, SayGoodBye, HasName, CanRun;

   // Trait Visibility Override
   // use SayHello, SayGoodBye, HasName, CanRun {
   //    hello as private;
   //    goodBye as private;
   // }

   public function run(): void
   {
      echo "Person $this->name is running";
   }

   // trait override
   // public function goodBye(?string $name): void
   // {
   //    echo "Goodbye in Person";
   // }

   // public function hello(?string $name): void
   // {
   //    echo "Hello in Person";
   // }
}

$person = new Person();
$person->goodBye("Ridho");
$person->hello("Tony");
$person->name = "What You Name ?";
var_dump($person);

$person->run();
