<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
   
    $fruits = ["apple", "banana", "cherry"];

    $test = ["Mango", "Strawberry"];

    array_splice($fruits, 1, 0 , $test);
    print_r($fruits);
  ?>
  
</body>
</html>