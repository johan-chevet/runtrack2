<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$str = substr( $str,1,strlen( $str ) -1) . strtolower($str[0]);
$str[0] = strtoupper($str[0]);
echo $str;
?>