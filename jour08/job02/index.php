<?php
$nbvisites = 0;
if (!isset($_COOKIE["nbvisites"]) || isset($_POST["reset"])) {
    setcookie("nbvisites", 0);
} else {
    $nbvisites = (int)$_COOKIE["nbvisites"] + 1;
    setcookie("nbvisites", $nbvisites);
}
?>

<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <title>Job02</title>
    </head>
    <body>
        <?php
            echo "nombre de visites: $nbvisites";
        ?>
        <form method="post">
            <button type="submit" name="reset" >Reset</button>
        </form>
    </body>
</html>