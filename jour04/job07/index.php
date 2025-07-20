<?php

function printRoof($largeur, $hauteur) {
    for($i = 0; $i < $hauteur; $i++) {
        for ($j = 0; $j < $largeur; $j++) {
            if ($j == ($largeur / 2) - $i - 1) {
                echo "/";
            } else if ($j == ($largeur / 2) + $i) {
                echo "\\<br>";
                break;
            } else if ($j > ($largeur / 2) - $i - 1 && $j < ($largeur / 2) + $i) {
                echo "_";
            } else {
                echo " ";
            }
        }
    }
}
function printWall($largeur, $hauteur) {
    for($i = 0; $i < $hauteur; $i++) {
        for ($j = 0; $j < $largeur; $j++) {
            if ($j == 0) {
                echo "|";
            } else if ($j == $largeur -1) {
                echo "|<br>";
            } else if ($i == $hauteur - 1) {
                echo "_";
            } else {
                echo " ";
            }
        }
    }
}
$largeur = 0;
$hauteur = 0;
if (isset($_POST["largeur"]) && isset($_POST["hauteur"])) {
    // Check if value is an integer
    // If hauteur * 2 != largeur == bad display
    if (filter_var($_POST["largeur"], FILTER_VALIDATE_INT) &&
    filter_var($_POST["hauteur"], FILTER_VALIDATE_INT)) {
        $hauteur = $_POST["hauteur"];
        $largeur = $_POST["largeur"];
    }
}
?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job07</title>
    </head>
    <body>
        <main>
            <form action="./index.php" method="post">
                <label for="largeur">Largeur</label>
                <input type="text" name="largeur" id="largeur">
                <label for="hauteur">Hauteur</label>
                <input type="text" name="hauteur" id="hauteur">
                <input type="submit">
            </form>
            <div>
                <?php if ($largeur && $hauteur) {
                    printRoof($largeur, $hauteur);
                    printWall($largeur, $hauteur);
                }?>
            </div>
        </main>
    </body>
</html>