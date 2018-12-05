<?php
$n = intval(readline());
$students = [];

for ($i = 0; $i < $n; $i++){
    $name = readline();
    $grade = floatval(readline());
    if (!key_exists($name, $students)){
        $students[$name] = $grade;
    }
    else{
        $students[$name] = ($students[$name] + $grade) / 2 ;
    }
}

arsort($students);

foreach ($students as $student => $grade){
    if($grade >= 4.5){
        echo $student . " -> " . sprintf("%.2f", $grade) . PHP_EOL;
    }
}