<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
  <main>
    <?php for ($i = 0; $i <= 1337; $i++):
      if ($i == 42): ?>
        <b><u><?= $i ?></u></b>
      <?php else:
        echo $i;
      endif;
      ?>
      <br>
    <?php endfor; ?>
  </main>
</body>

</html>