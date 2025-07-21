<?php
function gras($str) {
    for ($i = 0; $i < strlen($str); $i++) {
        if ($i == 0 && IntlChar::isupper($str[$i])) {
            echo "<b>$str[$i]</b>";
        } else if (IntlChar::isupper($str[$i]) && IntlChar::isWhitespace($str[$i - 1])) {
            echo "<b>$str[$i]</b>";
        } else {
            echo $str[$i];
        }
    }
}

function cesar($str, $decalage = 2) {
    for ($i = 0; $i < strlen($str); $i++) {
        if (ord($str[$i]) >= 65 && ord($str[$i]) <= 90) {
            $newValue = ord($str[$i]) + $decalage;
            if ($newValue > 90) {
                $newValue = $newValue % 91 + 65;
            }
            echo chr($newValue);
        } else if (ord($str[$i]) >= 97 && ord($str[$i]) <= 122) {
            $newValue = ord($str[$i]) + $decalage;
            if ($newValue > 122) {
                $newValue = $newValue % 123 + 97;
            }
            echo chr($newValue);
        }
    }
}

function plateforme($str) {
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++) {
        echo $str[$i];
        if ($str[$i] === "e" && $str[$i - 1] === "m" && ($i + 1 === $len || $str[$i + 1] === " ")) {
            echo "_";
        }
    }
}

$str = $_POST["str"];
$fonction = $_POST["fonction"];
?>

<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <title>Job07</title>
    </head>
    <body>
        <form method="post">
            <label for="str">Str:</label>
            <input type="text" name="str" id="str">
            <label for="fonction">Transform to:</label>
            <select name="fonction" id="fonction">
                <option selected>gras</option>
                <option>cesar</option>
                <option>plateforme</option>
            </select>
            <button type="submit">submit</button>
        </form>
        <?php
        if ($str && $fonction) {
            if ($fonction === "gras") {
                gras($str);
            } else if ($fonction === "cesar") {
                cesar($str);
            } else if ($fonction === "plateforme") {
                plateforme($str);
            }
        }
        ?>
    </body>
</html>