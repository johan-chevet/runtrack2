<?php
function calcule($a, $operation, $b) {
    switch ($operation) {
        case "+":
            return $a + $b;
        case "-":
            return $a - $b;
        case "*":
            return $a * $b;
        case "/":
            return $a / $b;
        default:
            return $a % $b;
    }
}
echo calcule("2", "+", "2") . "<br>";
echo calcule("2", "-", "2") . "<br>";
echo calcule("2", "*", "2") . "<br>";
echo calcule("4", "/", "2") . "<br>";
echo calcule("4", "%", "2") . "<br>";
?>
