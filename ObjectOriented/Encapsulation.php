<?php 
 class Employee {
    private $salary;

    public function setSalary($salary){
        $this->salary = $salary;
    }
    public function getSalary(){
        return $this->salary;
    }
}
?>