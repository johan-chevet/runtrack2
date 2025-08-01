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

$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
$dic = [
  "consonnes" => 0,
  "voyelles" => 0,
];
$vowel = ["a", "e", "i", "o", "u", "y"];
$len = myStrlen($str);
for ($i = 0; $i < $len; $i++) {
  if (myInArray($vowel, myTolower($str[$i])) !== false) {
    $dic["voyelles"]++;
  } else {
    $dic["consonnes"]++;
  }
}
?>
<style>
  table,
  th {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;
  }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
  <main>
    <table>
      <thead>
        <tr>
          <th>Consonnes</th>
          <th>Voyelles</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th><?= $dic['consonnes'] ?></th>
          <th><?= $dic['voyelles'] ?></th>
        </tr>
      </tbody>
    </table>
  </main>
</body>

</html>