<?php
$array = [26, 37, 88, 1111, 3233]
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
        <?php for( $i = 0; $i <= 1337; $i++ ): ?>
          <?php if (!in_array($i, $array)): ?>
            <?= $i ?>
            <br>
          <?php endif; ?>
        <?php endfor; ?>
    </main>
  </body>
</html>