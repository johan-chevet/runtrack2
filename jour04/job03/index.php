<?php
echo "Le nombre d’argument POST envoyé est : " . count($_POST);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job03</title>
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
    </main>
</body>

</html>