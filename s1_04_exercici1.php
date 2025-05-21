<?php




class Employee
{
    private $name;
    private $salary;

    public function initialize($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function print()
    {
        echo "Nom: " . $this->name . "\n";
        if ($this->salary >= 6000) {
            echo "Ha de pagar impostos.\n";
        } else {
            echo "No ha de pagar impostos.\n";
        }
    }
}

$employee = new Employee();
$employee->initialize("Pau", 1500);
$employee->print();
$employee2 = new Employee();
$employee2->initialize("Jordi", 7000);
$employee2->print();
$employee3 = new Employee();
$employee3->initialize("Pepito", 3000);
$employee3->print();
?>