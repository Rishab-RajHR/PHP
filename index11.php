<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
   
   // Multidimensional Array
   $food = [
       "fruits" => array("apple", "banana", "cherry"),
       "meat" => array("chicken", "fish"),
       "vegetables" => array("cucumber", "carrot"),
   ];

   echo $food["vegetables"][0]; // Output: apple

  ?>
  
</body>
</html>