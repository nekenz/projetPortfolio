<?php
$req = $db->query('SELECT * FROM utilisateur');

 

foreach  ($req as $row) {

  print $row['id'] . "<br>";

  print  $row['nom'] . "<br>";

  print $row['prenom'] . "<br>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo</h1>
</body>
</html>