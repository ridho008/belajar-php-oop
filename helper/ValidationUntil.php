<?php 

class ValidationUntil {
   static function validate(LoginRequest $request)
   {
      if(!isset($request->username)) {
         throw new ValidationException("Username is null");
      } else if(!isset($request->password)) {
         throw new ValidationException("Password is null");
      }
   }

   static function validateReflection($request)
   {
      $reflection = new ReflectionClass($request);
      // mengambil semua properties yang visibility public
      $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
      foreach($properties as $property) {
         // cek apakah properties yang di set ada atau tidak ?
         if(!$property->isInitialized($request)) {
            throw new ValidationException("$property->name is not set.");
            // cek ketika value tidak di isikan
         } else if(is_null($property->getValue($request))) {
            throw new ValidationException("$property->name is null");
         }
      }
   }
}