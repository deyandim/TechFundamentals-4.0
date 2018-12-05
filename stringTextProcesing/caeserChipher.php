<?php
$input = readline();
$number = 0;
$digits = "";
for ($i = 0; $i < strlen($input); $i++){
    $number = ord($input[$i]) + 3;
    $digits .=chr($number);
}

echo $digits;