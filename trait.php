

<?php 

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

// sehingga function sayHello dan SayGoodBye, bisa digunakan oleh class person, sama hal dengan konsepnya extensions
class Person {
   use SayHello, SayGoodBye, HasName;
}

$person = new Person();
$person->goodBye("Ridho");
$person->hello("Tony");
$person->name = "What You Name ?";
var_dump($person);
