<?php
$input = explode(" ", readline());
$firstWord = $input[0];
$secondWord = $input[1];
$sum2 = 0;
$sum = 0;


if (strlen($firstWord) > strlen($secondWord)){
    $diff = strlen($secondWord);
    for ($i = 0; $i < strlen($secondWord); $i++){
        $product = 1;
        $product = ord($firstWord[$i]) * ord($secondWord[$i]);
        $sum += $product + ord($firstWord[$diff]);
        $diff++;
    }
}
elseif (strlen($firstWord) < strlen($secondWord)){

    for ($j = strlen($secondWord) - 1; $j > strlen($firstWord) - 1; $j--){
        $sum2 += ord($secondWord[$j]);
//        var_dump($sum2);
    }
    for ($i = 0; $i < strlen($firstWord); $i++){

        $product = 1;
        $product = ord($firstWord[$i]) * ord($secondWord[$i]);
        $sum += $product;

    }
    $sum += $sum2;
}
else{
    for ($i = 0; $i < strlen($firstWord); $i++){
        $product = 1;
        $product = ord($firstWord[$i]) * ord($secondWord[$i]);
//        echo $product . PHP_EOL;

        $sum += $product;
//        echo "sum= ".$sum . PHP_EOL;

    }
}
echo $sum . PHP_EOL;

//echo  $sum;