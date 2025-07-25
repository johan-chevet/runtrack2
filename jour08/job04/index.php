<?php
session_start();
if (isset($_POST["prenom"]) && strlen($_POST["prenom"])) {
    $_SESSION["login"] = $_POST["prenom"];
}
if (isset($_POST["deco"])) {
    $_SESSION["login"] = null;
}
?>

<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <title>Job04</title>
    </head>
    <body>
        <?php if (!isset($_SESSION["login"])): ?>
            <form method="post">
                <label for="prenom">Prenom:</label>
                <input type="text" name="prenom" id="prenom">
                <button type="submit" name="connexion" >Connexion</button>
            </form>
        <?php endif; ?>
        <?php if (isset($_SESSION["login"])): ?>
            <form method="post">
                <p><?="Bonjour " . htmlspecialchars($_SESSION["login"]) . " !" ?></p>
                <button type="submit" name="deco" >Déconnexion</button>
            </form>
        <?php endif; ?>
    </body>
</html>