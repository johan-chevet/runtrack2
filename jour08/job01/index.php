<?php
session_start();
if (!isset($_SESSION["nbvisites"])) {
    $_SESSION["nbvisites"] = 0;
}
$_SESSION["nbvisites"] += 1;
if (isset($_POST["reset"])) {
    $_SESSION["nbvisites"] = 0;
}
?>

<html lang="eng">

<head>
    <meta charset="UTF-8">
    <title>Job01</title>
</head>

<body>
    <?= "nombre de visites: " . $_SESSION["nbvisites"] ?>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>

</html>