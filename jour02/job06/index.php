<?php
$largeur = 20;
$hauteur = 10;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
  <main>
    <?php for ($i = 0; $i < $hauteur; $i++): ?>
      <?php for ($j = 0; $j < $largeur; $j++): ?>
        <?= "O" ?>
      <?php endfor; ?>
      <br>
    <?php endfor; ?>
  </main>
</body>

</html>