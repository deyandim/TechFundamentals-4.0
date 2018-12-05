<?php
$input = explode('\\', readline());
$output = explode(".", $input[count($input) - 1]);


echo  "File name: " . $output[0] . PHP_EOL
       . "File extension: " . $output[1] . PHP_EOL;
