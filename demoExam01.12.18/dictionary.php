<?php
$input = readline();
$firstLine = explode(" | ", $input);
$dict = [];
$arr = [];

foreach ($firstLine as $item) {
    $arr = explode(": ", $item);
    $main = $arr[0];
    $meaning = $arr[1];
    if (!key_exists($main, $dict)) {
        $dict[$main] = [];
        $dict[$main][] = $meaning;
    } else {
        $dict[$main][] = $meaning;
        usort($dict[$main], function ($first, $second) {
            return strlen($second) <=> strlen($first);
        });
    }

}

//var_dump($dict);

$definition = readline();
$definition = explode(" | ", $definition);
$newDict = [];
foreach ($definition as $item) {
    if (key_exists($item, $dict)) {
        $newDict[$item] = $dict[$item];
    }
}
//var_dump($newDict);

$command = readline();

if ($command === "End") {
    foreach ($newDict as $key => $value) {
        echo $key . PHP_EOL;
        foreach ($value as $item) {
            echo "-" . $item . PHP_EOL;
        }
    }
} else {
    $dict1 = [];
    foreach ($dict as $key => $value) {
        $dict1[] = $key;
    }
    asort($dict1);
    foreach ($dict1 as $item) {
        echo $item . " ";
    }
}


