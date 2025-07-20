<?php
function occurence($str, $char) {
    $count = 0;
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] == $char) {
            $count++;
        }
    }
    return $count;
}
echo occurence("Bonjour", "o");
?>
