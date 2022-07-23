<?php 

// Final Class, merupakan salah satu keyword untuk memberhentikan pembuatan child class selanjutnya, sehingga tidak dapat dibuat lagi turunan class yang ada kata kunci di Final
class MediaSocial {
   public  string $name;
}

final class Facebook extends MediaSocial {}

// akan error
class FakeFacebook extends Facebook {}