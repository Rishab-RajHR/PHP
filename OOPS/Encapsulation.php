<?php
class class1{
  protected $num;
  function __construct() {
      $this->num=1;
  }
}
$obj = new class1();

$obj->num=2;

echo $obj->name;
?>