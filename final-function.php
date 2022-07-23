<?php 

// Final Class, merupakan salah satu keyword untuk memberhentikan pembuatan child class selanjutnya, sehingga tidak dapat dibuat lagi turunan class yang ada kata kunci di Final
// sedangkan
// Final Function, tidak bisa override function yang ada keyword final
class MediaSocial {
   public  string $name;
}

class Facebook extends MediaSocial {
   final public function login(string $username, string $password): bool
   {
      return true;
   }
}

// akan error (Final Class)
class FakeFacebook extends Facebook {
   // error (Final Function)
   public function login(string $username, string $password): bool
   {
      return false;
   }
}