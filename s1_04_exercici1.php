<?php
/*Crea una classe Employee, defineix com a atributs el seu nom i sou. 
Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
Plantejar un segon mètode print que imprimeixi el nom i un missatge 
si ha de pagar o no impostos (si el sou supera 6000, paga impostos).
Crea un objecte de la classe Employee i inicialitza’l amb el nom i sou corresponents. 
Imprimeix el nom i si ha de pagar impostos o no.*/


$employee = new Employee();
$employee->initialize ("Pau" , 1500);

class Employee {
private $name;
private $salary;

public function initialize($name, $salary) {
$this->name = $name;
$this->salary = $salary;
}

public function print() {
echo "Nom: " . $this->name . "\n";
if ($this->salary > 6000) {
echo "Ha de pagar impostos.\n";
} else {
echo "No ha de pagar impostos.\n";
}
}
}
?>