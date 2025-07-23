<?php
$array = [26, 37, 88, 1111, 3233];
$inArray = false;
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
      <?php for( $i = 0; $i <= 1337; $i++ ) {
        $inArray = false;
        foreach( $array as $value ) {
            if ($value == $i) {
              $inArray = true;
            }
        }
        if ($inArray) {
          continue;
        }
        echo (string)$i . "<br/>";
      }
      ?>
    </main>
  </body>
</html>