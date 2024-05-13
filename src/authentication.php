<?php 
  interface Authentication{

    
    public function login( Employee $employee, string $password): void;


  }

?>