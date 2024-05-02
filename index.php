<?php 
include __DIR__ . "/Controller/newTable.php";
include __DIR__ . "/Models/hotels.php";
var_dump(new_table($hotels))
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">park</th>
      <th scope="col">vote</th>
      <th scope="col">distance to center</th>
    </tr>
  </thead>
  <tbody>
    <?php  echo new_table($hotels) ?>
    
  </tbody>
</table>
</body>
</html>