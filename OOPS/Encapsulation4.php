<?php
class class1{
  protected $num;
  function __construct() {
      $this->num=1;
  }

  public function getData(){
     echo "Hello!";
  }
}
class class2 extends class1 {
    function getNum() {
        return $this->num;
    }
}

$obj = new class2();
// echo $obj->getNum();
echo $obj->getData();


// public 
// protected
// private
?>