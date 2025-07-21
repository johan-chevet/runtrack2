<?php
if (isset($_POST["username"]) && isset($_POST["password"])) {
    if ($_POST["username"] === "John" && $_POST["password"] === "Rambo") {
        echo "C'est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.">
        <title>Job05</title>
    </head>
    <body>
        <main>
            <form action="./index.php" method="post">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
                <input type="submit">
            </form>
        </main>
    </body>
</html>