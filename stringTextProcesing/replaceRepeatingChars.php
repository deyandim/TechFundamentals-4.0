<?php
$input = readline();
$arrOfChar = [];
$output = '';
for ($i = 0; $i < strlen($input); $i++){
    $arrOfChar[] = $input[$i];
}
for ($i = 0; $i < count($arrOfChar) - 1; $i++){
    if($arrOfChar[$i] === $arrOfChar[$i + 1]){
        array_splice($arrOfChar, $i, 1);
        $i--;
    }
}
for ($i = 0; $i < count($arrOfChar); $i++){
    $output .= $arrOfChar[$i];
}
echo $output;