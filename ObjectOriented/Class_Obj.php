<?php 
  class Car  {
     public $name;

     public function setName($name){
        $this->name = $name;
     }
    public function getName() {
        return $this->name;
    }
  }
  $car1 = new Car();
  $car1->setName("BMW");
  echo $car1->getName();
?>