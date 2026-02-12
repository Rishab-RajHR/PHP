<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <title>Document</title>
</head>
<body>
    
  <?php 

   $bool = true;
   $a = 1;
   $b = 4;
  
    switch ($a) {
       case 1:
          echo "The first condition is true!";
          break;
       case 2:
          echo "Second condition is true!";
          break;
       case 3:
          echo "Third condition is true!";
          break;
       default:
          echo "None of the condition were true!";

    }

    if ($a == 1){
        echo "First condition is true!";
    }
    else if ($a == 2){
        echo "Second condition is true!";
    }
    else if ($a == 3){
        echo "Third condition is true!";
    } else {
        echo "None of the conditions were true";
    }

  ?>
  
</body>
</html>