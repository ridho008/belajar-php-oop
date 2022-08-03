<?php 

require_once "exception/ValidationException.php";
require_once "helper/validation.php";

class LoginRequest {
   public string $username;
   public string $password;
}

$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "";

try {
   // masukan kode yang memunkinkan terjadinya error
   validateLoginRequest($loginRequest);
   // menangkan 2 jenis class exception
} catch(ValidationException | Exception $exception) {
   echo "Validation Error : {$exception->getMessage()}";
   var_dump($exception->getTrace());
   echo $exception->getTraceAsString();
} finally {
   echo "Eror atau tidak error akan muncul";
}
echo "Valid";