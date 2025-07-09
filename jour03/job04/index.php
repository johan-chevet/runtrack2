<?php
function myStrlen($str)  {
  $i = 0;
  while (isset($str[$i])) {
    $i++;
  }
  return $i;
}

$str = "Dans l'espace, personne ne vous entend crier";
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
        echo myStrlen($str);
      ?>
    </main>
  </body>
</html>