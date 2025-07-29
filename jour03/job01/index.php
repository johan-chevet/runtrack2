<?php
$numbers = [200, 204, 173, 98, 171, 404, 459.]
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
    foreach ($numbers as $number) {
      if ($number % 2 == 0) {
        echo $number . " est pair<br>";
      } else {
        echo $number . " est impair<br>";
      }
    }
    ?>
  </main>
</body>

</html>