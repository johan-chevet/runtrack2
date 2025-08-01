<?php

function printRoof($largeur)
{
    $height = (int)($largeur / 2);
    for ($i = 0; $i < $height; $i++) {
        for ($j = 0; $j < $largeur; $j++) {
            if ($j == $height - $i - 1) {
                echo "/";
            } else if ($j == $height + $i) {
                echo "\\<br>";
                break;
            } else if ($j > $height - $i - 1 && $j < $height + $i) {
                echo "_";
            } else {
                echo " ";
            }
        }
    }
}

function printWall($largeur, $hauteur)
{
    for ($i = 0; $i < $hauteur; $i++) {
        for ($j = 0; $j < $largeur; $j++) {
            if ($j == 0) {
                echo "|";
            } else if ($j == $largeur - 1) {
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
if (isset($_GET["largeur"]) && isset($_GET["hauteur"])) {
    // if (
    //     filter_var($_GET["largeur"], FILTER_VALIDATE_INT) &&
    //     filter_var($_GET["hauteur"], FILTER_VALIDATE_INT)
    // ) {
    $hauteur = (int)$_GET["hauteur"];
    $largeur = (int)$_GET["largeur"];
    // }
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
        <form action="./index.php" method="get">
            <label for="largeur">Largeur</label>
            <input type="text" name="largeur" id="largeur">
            <label for="hauteur">Hauteur</label>
            <input type="text" name="hauteur" id="hauteur">
            <input type="submit">
        </form>
        <div>
            <br>
            <?php if ($largeur && $hauteur) {
                printRoof($largeur);
                printWall($largeur, $hauteur);
            } ?>
        </div>
    </main>
</body>

</html>