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
    $a = "1";
    $b = 4;

    $result = match ($a) {
          1, 3, 5 => "Variable a is equal to one!",
          2 => "Variable a is equal to two!",
          default => "None were a match",
    };

    echo $result;

  ?>
  
</body>
</html>