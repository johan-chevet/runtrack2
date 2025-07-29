<?php
function isPrime($num)
{
  if ($num <= 1) return false;
  if ($num === 2) return true;
  if ($num % 2 === 0) return false;

  $sqrt = floor(sqrt($num));
  for ($i = 3; $i <= $sqrt; $i += 2) {
    if ($num % $i === 0)
      return false;
  }
  return true;
}
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
    <?php for ($i = 0; $i <= 1000; $i++): ?>
      <?php if (isPrime($i)): ?>
        <?= $i ?>
        <br>
      <?php endif; ?>
    <?php endfor; ?>
  </main>
</body>

</html>