<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scopes</title>
</head>
<body>
     <?php
     
      function myFunction()
      {
           // Defines a local variable
           $localVar = "Hello, world!";

           // Use the local variable
           return $localVar; // Output: Hello, world!
      }

      echo myFunction();
       
     ?>

</body>
</html>