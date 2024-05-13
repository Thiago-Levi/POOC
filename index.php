<?php 

require_once 'src/Person.php';
require_once 'src/Address.php';
require_once 'src/Employee.php';

// $personA = new Person("Levi", 37, new Address("CE", "Maracanaú", "Jereissati 1", "Rua 09", "600", "61900300"));

// $personB = new Person("José", 37, new Address("CE", "Maracanaú", "Jereissati 1", "Rua 09", "600", "61900300"));

// $personC = new Person("Fábio", 37, new Address("CE", "Maracanaú", "Jereissati 1", "Rua 09", "600", "61900300"));

$myEmployee = new Employee("Thiago Levi",37, "Developer", 2000, new Address("CE", "Maracanaú", "Jereissati 1", "Rua 09", "600", "61900300"));

//var_dump($myEmployee);

$myEmployee->setPassword("abc");
$myEmployee->login("Thiago Levi", "abc");


?>