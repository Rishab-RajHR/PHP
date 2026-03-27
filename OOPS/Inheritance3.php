<?php
class class1 {
    function __construct() {
        $this->num=1;
    }
    function fun1(){
      echo "Fun1";
    }
}
class class2 extends class1 {
   function __construct(){
      echo "Construct2";
       $this->num=2;
      parent::__construct();
   }
   function fun1(){
      echo "Fun2";
   }
}
$obj = new class2;
echo $obj->num;
?>