<?php
if (isset($_POST["prenom"]) && strlen($_POST["prenom"])) {
    $_COOKIE["login"] = $_POST["prenom"];
}
if (isset($_POST["deco"])) {
    $_COOKIE["login"] = null;
}
?>

<html lang="eng">

<head>
    <meta charset="UTF-8">
    <title>Job04</title>
</head>

<body>
    <?php if (!isset($_COOKIE["login"])): ?>
        <form method="post">
            <label for="prenom">Prenom:</label>
            <input type="text" name="prenom" id="prenom">
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
    <?php if (isset($_COOKIE["login"])): ?>
        <form method="post">
            <p><?= "Bonjour " . htmlspecialchars($_COOKIE["login"]) . " !" ?></p>
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php endif; ?>
</body>

</html>