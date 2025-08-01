<?php
function myStrlen($str)
{
  $len = 0;
  while (isset($str[$len])) {
    $len++;
  }
  return $len;
}

function myInArray($array, $toFind)
{
  $len = myStrlen($array);
  for ($i = 0; $i < $len; $i++) {
    if ($toFind === $array[$i]) {
      return $i;
    }
  }
  return false;
}

function myTolower($c)
{
  $lower = "abcdefghijklmnopqrstuvwxyz";
  if ($c >= "A" && $c <= "Z") {
    return $lower[myInArray("ABCDEFGHIJKLMNOPQRSTUVWXYZ", $c) % 26];
  }
  return $c;
}

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
    $len = myStrlen($str);
    for ($i = 0; $i < $len; $i++) {
      if (myInArray($vowel, myTolower($str[$i])) !== false) {
        echo $str[$i];
      }
    }
    ?>
  </main>
</body>

</html>