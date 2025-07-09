<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$vowel = ["a", "e", "i", "o", "u", "y"];
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
        for ($i = 0; $i < strlen($str); $i++) {
          if (in_array(strtolower($str[$i]), $vowel)) {
            echo $str[$i];
          }
        }
      ?>
    </main>
  </body>
</html>