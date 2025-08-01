<?php
function myStrlen($str)
{
    $len = 0;
    while (isset($str[$len])) {
        $len++;
    }
    return $len;
}

$str = "Les choses que l'on possede finissent par nous posseder.";
$len = myStrlen($str);
for ($i = $len - 1; $i >= 0; $i--) {
    echo $str[$i];
}
