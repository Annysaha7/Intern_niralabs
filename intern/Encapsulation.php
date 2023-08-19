<?php
class Employee {
    private $emp_name;
    private $emp_id;
    private $salary;

    public function __construct($emp_name, $emp_id) {
        $this->emp_name = $emp_name;
        $this->emp_id = $emp_id;
        $this->salary = 0; 
    }

    public function getEmp_name() {
        return $this->emp_name;
    }

    public function getEmpId() {
        return $this->emp_id;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        if ($salary >= 0) {
            $this->salary = $salary;
        } else {
            echo "Salary cannot be negative.";
        }
    }
}

$emp1 = new Employee("Anny Saha", 101);
$emp2 = new Employee("Mim Saha", 102);

$emp1->setSalary(10000);
echo "Updated Employee Salary for emp1: " . $emp1->getSalary() . "<br>";

$emp2->setSalary(15000);
echo "Updated Employee Salary for emp2: " . $emp2->getSalary() . "<br>";


echo "Employee Name: " . $emp1->getEmp_name() . "<br>";
echo "Employee ID: " . $emp1->getEmpId() . "<br>";
echo "Employee Salary: " . $emp1->getSalary() . "<br>";

echo "Employee Name: " . $emp2->getEmp_name() . "<br>";
echo "Employee ID: " . $emp2->getEmpId() . "<br>";
echo "Employee Salary: " . $emp2->getSalary() . "<br>";


// set a negative salary
$emp1->setSalary(-10000); 
?>