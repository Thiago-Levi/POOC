<?php



abstract class Person
{
  private string $name;
  private int $age;
  protected Address $address;
  private static int $numberOfPersons = 0;
  protected float $discount;


  public function __construct(string $name, int $age, Address $address)
  {
  
      $this->name = $name;
      $this->age = $age;
      $this->address = $address;
      $this->discount = $this->setDiscount();
      self::$numberOfPersons++;
  
  }

  public function getName(): string{
      return $this->name;
  }

  public function setName($newName): void{
    $this->name = $newName;
  }

  public function getAge(): string{
    return $this->age;
}

  public function setAge($newAge): void{
      $this->name = $newAge;
      
  }


  public static function getNumberOfPersonsInstantiated(): int{
      return self::$numberOfPersons;
  }

  

  protected abstract function setDiscount(): float;



}
