<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
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
    $len = 0;
    while (isset($str[$len])) {
      $len++;
    }
    for ($i = 0; $i < $len; $i++) {
      if ($i % 2 === 0) {
        echo $str[$i];
      }
    }
    ?>
  </main>
</body>

</html>