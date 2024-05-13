<?php 

class Address{
  private string $uf;
  private string $city;
  private string $patio;
  private string $number;
  private string $neighborhood;
  private string $cep;


  public function __construct(string $uf
  ,string $city
  ,string $patio
  ,string $number
  ,string $neighborhood
  ,string $cep)
  {
    $this-> uf = $uf;
    $this-> city = $city;
    $this-> patio = $patio;
    $this-> number = $number;
    $this-> neighborhood = $neighborhood;
    $this-> cep = $cep;
  }



}


?>