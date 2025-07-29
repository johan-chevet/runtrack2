<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.">
    <title>Job02</title>
</head>

<body>
    <main>
        <form action="./index.php" method="get">
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
                <?php foreach ($_GET as $argument => $value): ?>
                    <tr>
                        <td><?= htmlspecialchars($argument) ?></td>
                        <td><?= htmlspecialchars($value) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>

</html>