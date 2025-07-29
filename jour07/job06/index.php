<?php
function leetSpeak($str)
{
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++) {

        switch (strtolower($str[$i])) {
            case "a":
                $str[$i] = "4";
                break;
            case "b":
                $str[$i] = "8";
                break;
            case "e":
                $str[$i] = "3";
                break;
            case "g":
                $str[$i] = "6";
                break;
            case "l":
                $str[$i] = "1";
                break;
            case "s":
                $str[$i] = "5";
                break;
            case "t":
                $str[$i] = "7";
                break;
            default:
                break;
        }
    }
    return $str;
}
echo htmlspecialchars(leetSpeak("lEet Speak"));
