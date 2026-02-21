<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scopes</title>
</head>
<body>
     <?php

      $test = "Alex";
     
      function myFunction()
      {
          // Declare a static variable
           static $staticVar = 0;

          // Increment the static variable
          $staticVar++;

          // Use the static variable
          return $staticVar;
      }

      echo myFunction();
      echo myFunction();
      echo myFunction();
       
     ?>

</body>
</html>