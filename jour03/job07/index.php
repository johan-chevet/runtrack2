<?php
function myStrlen($str)
{
    $len = 0;
    while (isset($str[$len])) {
        $len++;
    }
    return $len;
}

function myInArray($array, $toFind)
{
    $len = myStrlen($array);
    for ($i = 0; $i < $len; $i++) {
        if ($toFind === $array[$i]) {
            return $i;
        }
    }
    return false;
}

function myTolower($c)
{
    $lower = "abcdefghijklmnopqrstuvwxyz";
    if ($c >= "A" && $c <= "Z") {
        return $lower[myInArray("ABCDEFGHIJKLMNOPQRSTUVWXYZ", $c) % 26];
    }
    return $c;
}

function myToupper($c)
{
    $lower = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    if ($c >= "a" && $c <= "z") {
        return $lower[myInArray("abcdefghijklmnopqrstuvwxyz", $c) % 26];
    }
    return $c;
}

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$ret = "";
for ($i = 1; isset($str[$i]); $i++) {
    $ret .= $str[$i];
}
$ret .=  myTolower($str[0]);
$ret[0] = myToupper($ret[0]);

echo $ret;
