<?php
$string1 = "pesho";
$string2 = "stanislav";

$bigger = max(strlen($string1), strlen($string2));
$longestString = strlen($string1) > strlen($string2) ? $string1 : $string2;

$varable = isset($string1[7]);

var_dump($varable);
//var_dump($longestString);
