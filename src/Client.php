<?php 
class Client extends Person{

  private string $bornDate;
  private float $rent;


  public function __construct(string $bornDate, float $rent, string $name, int $age, Address $address)
  {
    parent::__construct($name, $age, $address);
    $this->bornDate = $bornDate;
    $this->rent = $rent;

  }


  public function getBornDate(): string{
    return $this->bornDate;
  }

  public function setBornDate(string $newBornDate): void{
    $this->bornDate = $newBornDate;
  }

  public function getRent(): float{
    return $this->rent;
  }

  public function setRent(string $newRent): void{
    $this->bornDate = $newRent;
  }

  public function setDiscount():float{

    return $this->discount = 0.20;

  }
  

}
?>