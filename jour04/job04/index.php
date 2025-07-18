<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.">
        <title>Job04</title>
    </head>
    <body>
        <main>
            <form action="./index.php" method="post">
                <input type="text" name="test1">
                <input type="text" name="test2">
                <input type="text" name="test3">
                <input type="text" name="test4">
                <input type="submit">
            </form>
            <table>
                <thead>
                    <tr>
                        <th>Argument</th>
                        <th>Valeur</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_POST as $argument => $value): ?>
                        <tr>
                            <td><?= $argument ?></td>
                            <td><?= $value ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>
    </body>
</html>