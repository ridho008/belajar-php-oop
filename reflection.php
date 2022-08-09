<?php 

require_once 'exception/ValidationException.php';
require_once 'helper/ValidationUntil.php';

class LoginRequest {
   public ?string $username;
   public ?string $password;
}

$request = new LoginRequest();
ValidationUntil::validateReflection($request);

class RegisterRequest {
   public ?string $name;
   public ?string $email;
}

$register = new RegisterRequest();
$register->name = null;
$register->email = null;
ValidationUntil::validateReflection($register);