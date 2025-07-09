<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  </head>
  <body>
    <main>
        <?php for( $i = 0; $i <= 100; $i++ ): ?>
          <?php if ( $i % 3 === 0 && $i % 5 === 0): ?>
            <?= "FizzBuzz" ?>
            <?php elseif ( $i % 3 === 0): ?>
              <?= "Fizz" ?>
            <?php elseif ( $i % 5 === 0): ?>
              <?= "Buzz" ?>
            <?php else: ?>
              <?= $i ?>
          <?php endif; ?>
        <br>
        <?php endfor; ?>
    </main>
  </body>
</html>