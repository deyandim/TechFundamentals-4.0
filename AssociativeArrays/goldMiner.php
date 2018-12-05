<?php

$input = readline();
$colection = [];
$arr = [];
while ($input !== "stop"){
    $colection[] = $input;
    $input = readline();
}
for ($i = 0; $i < count($colection) - 1; $i+=2){
    $color = $colection[$i];
    $karats = $colection[$i + 1];
    if (!key_exists($color, $arr)){
        $arr[$color] = $karats;
    }
    else{
        $arr[$color] += $karats;
    }
}

foreach ($arr as $color => $karat){
    echo $color . " -> " . $karat . "K" . PHP_EOL;
}