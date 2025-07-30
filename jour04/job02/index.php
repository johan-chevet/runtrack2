<?php
$fields = ["test1", "test2", "test3", "test4"];
?>

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
                <?php foreach ($fields as $field): ?>
                    <?php if (isset($_GET[$field]) && $_GET[$field] != ""): ?>
                        <tr>
                            <td><?= htmlspecialchars($field) ?></td>
                            <td><?= htmlspecialchars($_GET[$field]) ?></td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>

</html>