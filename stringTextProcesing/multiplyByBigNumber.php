<?php
$bigNum = readline();
$mulptiplier = intval(readline());
$product = 0;
$tensNum = 0;
$stringSum = "";

if($mulptiplier !== 0) {
   for ($i = strlen($bigNum) - 1; $i >= 0; $i--) {
        if ($tensNum > 0) {
            $product = $mulptiplier * intval($bigNum[$i]) + $tensNum;
        } else {
            $product = $mulptiplier * intval($bigNum[$i]);
        }
        $tensNum = 0;
        if ($product >= 10) {
            $stringSum .= strval($product % 10);
            $tensNum = strval(intval($product / 10));
        } else {
            $stringSum .= strval($product);
        }
        if ($i === 0 && $product >= 10) {
            $stringSum .= $tensNum;
        }
    }
    $output = (strrev($stringSum));
    echo $output;
}
else{
    echo 0;
}