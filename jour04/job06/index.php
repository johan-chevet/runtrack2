<?php
if (isset($_GET["nombre"])) {
    // $value = $_GET["nombre"];
    $value = (int)$_GET["nombre"];
    // Check if value is an integer
    // if (filter_var($value, FILTER_VALIDATE_INT) !== false) {
    echo "Nombre " . ($value % 2 == 0 ? "pair" : "impair");
    // }
}
?>
<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job06</title>
</head>

<body>
    <main>
        <form action="./index.php" method="get">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            <input type="submit">
        </form>
    </main>
</body>

</html>