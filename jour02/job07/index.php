<?php
function makeTriangle($hauteur) {
  $triangle = [];
  for ($i = 0; $i < $hauteur; $i++) {
    $line = "";
    for ($j = 0; $j < $hauteur * 2 -1; $j++) {
      if ($j === $hauteur - $i -1) {
        $line .= "/";
      }
      if ($j === $hauteur + $i -1) {
        $line .= "\\";
      }
      else if ($i === $hauteur -1) {
        $line .= "_";
      }
      else {
        $line .= " ";
      }
  }
    $triangle[] = $line;
  }
  return $triangle;
}
$hauteur = 15;
$array = makeTriangle($hauteur);
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
      <?php foreach ($array as $val): ?>
        <?= $val ?>
        <br>
      <?php endforeach; ?>
    </main>
  </body>
</html>