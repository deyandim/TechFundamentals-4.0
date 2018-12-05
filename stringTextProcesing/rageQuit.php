<?php
$input = readline();
$string = "";
$arr = [];
for ($i = 0; $i < strlen($input); $i++){
    if($i < strlen($input) - 1) {
        if (!ctype_digit($input[$i])) {
            $string .= strtoupper($input[$i]);
        } elseif (ctype_digit($input[$i]) && ctype_digit($input[$i + 1])) {

            $string = str_repeat($string, intval($input[$i] . $input[$i + 1]));
            $arr[] = $string;
            $string = "";

        } else {
            $string = str_repeat($string, intval($input[$i]));
            $arr[] = $string;
            $string = "";
        }
    }
    else{
        if (!ctype_digit($input[$i])) {
            $string .= strtoupper($input[$i]);
        } elseif (ctype_digit($input[$i])) {

            $string = str_repeat($string, intval($input[$i]));
            $arr[] = $string;
            $string = "";

        } else {
            $string = str_repeat($string, intval($input[$i]));
            $arr[] = $string;
            $string = "";
        }
    }
}
$arrOfChar = [];
foreach ($arr as $str){
    $string .= $str;
    for ($i = 0; $i < strlen($str); $i++){
        $arrOfChar[] = $str[$i];
    }
}
$uniqueSymbols = count(array_count_values($arrOfChar));

echo "Unique symbols used: $uniqueSymbols" . PHP_EOL
    . $string;