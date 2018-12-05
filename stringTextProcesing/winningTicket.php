<?php

$input = preg_split('/[\ \n\,]+/', readline());
$firstHalf = "";
$secondHalf = "";

foreach ($input as $item) {
    if (strlen($item) < 20){
        echo "invalid ticket" . PHP_EOL;
    }
    elseif ((strpos($item, "@") === false && strpos($item, "$") === false && strpos($item, "#") === false && strpos($item, "^") === false)){
        echo  "ticket \"$item\" - no match" . PHP_EOL;
    }
    elseif (strpos($item, "@") !== false){

        for ($i = 0; $i < strlen($item) / 2; $i++){
            $firstHalf .= $item[$i];
        }

        $firstCountOfSymbol = substr_count($firstHalf, "@");
        for ($i = strlen($item) / 2; $i < strlen($item) ; $i++){
            $secondHalf .= $item[$i];
        }

        $secondCountOfSymbol = substr_count($secondHalf, "@");
        if ($firstCountOfSymbol && $firstCountOfSymbol >= 6 && $firstCountOfSymbol < 10 || $secondCountOfSymbol >= 6 && $secondCountOfSymbol < 10){
            echo "ticket \"$item\" - $firstCountOfSymbol@" .PHP_EOL;
        }
        elseif ($firstCountOfSymbol === $secondCountOfSymbol && $firstCountOfSymbol === 10){
            echo "ticket \"$item\" - $firstCountOfSymbol@ Jackpot!" .PHP_EOL;
        }
    }
    elseif (strpos($item, "#") !== false){
        for ($i = 0; $i < strlen($item) / 2; $i++){
            $firstHalf .= $item[$i];
        }
        $firstCountOfSymbol = substr_count($firstHalf, "#");
        for ($i = strlen($item) / 2; $i < strlen($item) ; $i++){
            $secondHalf .= $item[$i];
        }
        $secondCountOfSymbol = substr_count($secondHalf, "#");
        if ($firstCountOfSymbol && $firstCountOfSymbol >= 6 && $firstCountOfSymbol < 10 || $secondCountOfSymbol >= 6 && $secondCountOfSymbol < 10){
            echo "ticket \"$item\" - $firstCountOfSymbol#" .PHP_EOL;
        }
        elseif ($firstCountOfSymbol === $secondCountOfSymbol && $firstCountOfSymbol === 10){
            echo "ticket \"$item\" - $firstCountOfSymbol# Jackpot!" .PHP_EOL;
        }
    }
    elseif (strpos($item, "$") !== false){
        for ($i = 0; $i < strlen($item) / 2; $i++){
            $firstHalf .= $item[$i];
        }
        $firstCountOfSymbol = substr_count($firstHalf, "$");
        for ($i = strlen($item) / 2; $i < strlen($item) ; $i++){
            $secondHalf .= $item[$i];
        }
        $secondCountOfSymbol = substr_count($secondHalf, "$");
        if ($firstCountOfSymbol && $firstCountOfSymbol >= 6 && $firstCountOfSymbol < 10 || $secondCountOfSymbol >= 6 && $secondCountOfSymbol < 10){
            echo "ticket \"$item\" - $firstCountOfSymbol$" .PHP_EOL;
        }
        elseif ($firstCountOfSymbol === $secondCountOfSymbol && $firstCountOfSymbol === 10){
            echo "ticket \"$item\" - $firstCountOfSymbol$ Jackpot!" .PHP_EOL;
        }
    }elseif (strpos($item, "^") !== false){
        for ($i = 0; $i < strlen($item) / 2; $i++){
            $firstHalf .= $item[$i];
        }
        $firstCountOfSymbol = substr_count($firstHalf, "^");
        for ($i = strlen($item) / 2; $i < strlen($item) ; $i++){
            $secondHalf .= $item[$i];
        }
        $secondCountOfSymbol = substr_count($secondHalf, "^");
        if ($firstCountOfSymbol && $firstCountOfSymbol >= 6 && $firstCountOfSymbol < 10 || $secondCountOfSymbol >= 6 && $secondCountOfSymbol < 10){
            echo "ticket \"$item\" - $firstCountOfSymbol^" .PHP_EOL;
        }
        elseif ($firstCountOfSymbol === $secondCountOfSymbol && $firstCountOfSymbol === 10){
            echo "ticket \"$item\" - $firstCountOfSymbol^ Jackpot!" .PHP_EOL;
        }
    }
    $firstHalf = "";
    $secondHalf = "";
}