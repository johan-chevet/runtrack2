<?php
$hauteur = 15;
$br = "<br>";
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
    <?php
    for ($i = 0; $i < $hauteur; $i++) {
      for ($j = 0; $j < $hauteur * 2 - 1; $j++) {
        if ($j === $hauteur - $i - 1) {
          echo "/";
        }
        if ($j === $hauteur + $i - 1) {
          echo "\\";
        } else if ($i === $hauteur - 1) {
          echo "_";
        } else {
          echo " ";
        }
      }
      echo $br;
    }
    ?>
  </main>
</body>

</html>