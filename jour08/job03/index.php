<?php
session_start();

if (isset($_POST["prenom"])) {
   if (!isset($_SESSION["prenoms"])) {
        $_SESSION["prenoms"] = [];
    }

    if (strlen($_POST["prenom"])) {
        $_SESSION["prenoms"][] = $_POST["prenom"];
    }
}
if (isset($_POST["reset"])) {
    $_SESSION["prenoms"] = [];
}
?>

<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <title>Job03</title>
    </head>
    <body>
        <form method="post">
            <label for="prenom">Prenom:</label>
            <input type="text" name="prenom" id="prenom">
            <button type="submit" name="save" >Save</button>
            <button type="submit" name="reset" >Reset</button>
        </form>
        <ul>
            <?php if (isset($_SESSION["prenoms"])): ?>
                <?php foreach ($_SESSION["prenoms"] as $prenom): ?>
                    <li>
                        <?= htmlspecialchars($prenom)?>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </body>
</html>