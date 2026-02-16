<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
    $tasks = [
      "laundry" => "Daniel",
      "trash" => "Frida",
      "vaccum" => "Basse",
      "dishes" => "Bella"
    ];

    // echo $tasks["laundry"];
    // print_r($tasks);
    // echo count($tasks);
    sort($tasks);
    print_r($tasks);
  ?>
  
</body>
</html>