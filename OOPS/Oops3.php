<?php
   class Class1{
      function __construct(){
         echo "start";
      }
      
      function fun1() {
         echo "Hello";
      }
      function __destruct(){
         echo "end";
      }
   }
   $obj1 = new class1();
   $obj1->fun1();
?>