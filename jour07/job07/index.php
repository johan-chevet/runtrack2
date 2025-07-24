<?php

function mystrlen($str) {
    $i = 0;
    while (isset($str[$i])) {
        $i++;
    }
    return $i;
}
function isUpper($char) {
    if ($char >= "A" && $char <= "Z") {
        return true;
    }
    return false;
}

function getCharIndex($char, $str) {
    $len = mystrlen($str);
    for ($i = 0; $i < $len; $i++ ) {
        if ($str[$i] === $char)
            return $i;
    }
    return false;
}
// function inString($char, $string) {
//     for ($i = 0; $i < mystrlen($string); $i++) {
//         if ($string[$i] == $char) {
//             return $i;
//         }
//     }
//     return false;
// }
function gras($str) {
    for ($i = 0; $i < mystrlen($str); $i++) {
        if ($i == 0 && isUpper($str[$i])) {
            echo "<b>$str[$i]</b>";
        } else if (isUpper($str[$i]) && $str[$i - 1] === " ") {
            echo "<b>$str[$i]</b>";
        } else {
            echo $str[$i];
        }
    }
}

function cesar($str, $decalage = 2) {
    // for ($i = 0; $i < mystrlen($str); $i++) {
    //     if (ord($str[$i]) >= 65 && ord($str[$i]) <= 90) {
    //         $newValue = ord($str[$i]) + $decalage;
    //         if ($newValue > 90) {
    //             $newValue = $newValue % 91 + 65;
    //         }
    //         echo chr($newValue);
    //     } else if (ord($str[$i]) >= 97 && ord($str[$i]) <= 122) {
    //         $newValue = ord($str[$i]) + $decalage;
    //         if ($newValue > 122) {
    //             $newValue = $newValue % 123 + 97;
    //         }
    //         echo chr($newValue);
    //     }
    // }
    $lower_alphabet = "abcdefghijklmnopqrstuvwxyz";
    $upper_alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    $len = mystrlen($str);
    for ($i = 0; $i < $len; $i++) {
        $res = getCharIndex($str[$i], $alpha);
        if ($res === false) {
            echo $str[$i];
        }
        else if (isUpper($str[$i])) {
           echo $upper_alphabet[($res + $decalage) % 26];
        } else {
           echo $lower_alphabet[($res + $decalage) % 26];
        }
    }
}

function plateforme($str) {
    $len = mystrlen($str);
    for ($i = 0; $i < $len; $i++) {
        echo $str[$i];
        if ($str[$i] === "e" && $str[$i - 1] === "m" && ($i + 1 === $len || $str[$i + 1] === " ")) {
            echo "_";
        }
    }
}
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
        if (isset($_POST["str"]) && isset($_POST["fonction"])){
            $str = $_POST["str"];
            $fonction = $_POST["fonction"];
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