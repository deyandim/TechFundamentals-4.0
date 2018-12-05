<?php

$input = explode(", ", readline());
$output = [];
foreach ($input as $users){
    if(strlen($users) >= 3 && strlen($users) <= 16 && preg_match('/^[A-Za-z-0-9_]+$/', $users)){
        $output[] = $users;
    }
}

foreach ($output as $user){
    echo $user . PHP_EOL;
}


