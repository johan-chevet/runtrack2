<?php

function getTableRow($name, $value) {
    $type = gettype($value);
    return "<tr><td>$type</td><td>$name</td><td>$value</td></tr>";
}

$str = "Contenu de la variable";
$int = 42;
$float = 3.14;
$bool = false;
$table = "<table><tr><th>type</th><th>nom</th><th>valeur</th></tr>";
$table .= getTableRow("str", $str);
$table .= getTableRow( "int", $int);
$table .= getTableRow( "float", $float);
$table .= getTableRow( "bool", $bool ? "true" : "false");
$table .= "</table>";

echo $table;
?>