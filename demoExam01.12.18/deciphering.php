<?php
$firstLine = readline();
$secondLine = readline();
$decodedString = '';
$asciiNum = 0;
if (!(preg_match(('/^[d-z{}|\[\]#]+$/m'), $firstLine))){
    echo "This is not the book you are looking for.";
    return;
}
else{
    for ($i = 0; $i < strlen($firstLine); $i++){
        $asciiNum = ord($firstLine[$i]) - 3;
        $decodedString .= chr($asciiNum);
    }
    $secondLine = explode(" ", $secondLine);
    $decodedString = str_replace($secondLine[0], $secondLine[1], $decodedString);
    echo $decodedString;
}