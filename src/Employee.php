<?php 

  require_once 'src/Person.php';
  require_once 'src/authentication.php';
  
  class Employee extends Person implements Authentication{
    
    private string $position;
    private float $salary;
    private string $password;


    public function __construct(string $name, int $age, string $position, float $salary, Address $address)
    {
      parent::__construct($name, $age, $address);
      $this->position = $position;
      $this->salary = $salary;

    }

    public function getPosition(): string{
      return $this->position;
    }
    public function setPosition(string $newPosition): void{
        $this->position = $newPosition;
    }

    public function getSalary(): string{
      return $this->salary;
    }

    public function setSalary(float $newSalary): void{
        $this->salary = $newSalary;
    }

    public function setDiscount():float{

      return $this->discount = 0.10;

    }

    public function setPassword(string $password){
      $this->password = $password;
    }
    public function login($name, string $password): void{
        if($password == $this->password && $this->getName() == $name){
            echo("Usuário: $name autenticado com sucesso!");
        }else{
          echo("Usuário ou senha inválidos!");
        }
    }



  }

?>