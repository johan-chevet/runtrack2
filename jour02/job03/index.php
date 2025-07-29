<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
  <main>
    <?php for ($i = 0; $i <= 100; $i++): ?>
      <?php if ($i === 42): ?>
        <?= "La Plateforme_" ?>
      <?php elseif ($i <= 20): ?>
        <i><?= $i ?></i>
      <?php elseif ($i >= 25 && $i <= 50): ?>
        <u><?= $i ?></u>
      <?php else: ?>
        <?= $i ?>
      <?php endif; ?>
      <br>
    <?php endfor; ?>
  </main>
</body>

</html>