<?php
$fields = ["test1", "test2", "test3", "test4"];
$count = 0;
foreach ($fields as $field) {
    if (isset($_POST[$field]) && $_POST[$field] != "") {
        $count++;
    }
}
echo "Le nombre d’argument POST envoyé est : $count";
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