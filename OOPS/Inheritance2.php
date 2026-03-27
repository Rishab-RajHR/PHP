<?php
class class1{
    function __contruct() {
       echo "construct1";
    }

    function fun1(){
        echo "Fun1";
    }
}

class class2 extends class1{
     function __construct() {
      // To call the parent class constructor
        parent::__construct();
        echo "Contructor";
     }

     function fun1(){
        echo "Fun2";
     }
}

$obj = new class2();
$obj->fun1();
?>