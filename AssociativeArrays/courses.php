<?php
$input = readline();
$courses = [];
$count = 1;
while ($input !== 'end'){
    $input = explode(" : ", $input);
    $course = $input[0];
    $name = $input[1];

    if (!key_exists($course, $courses)){
        $courses[$course][] = $name;

    }
    else{

        $courses[$course][] = $name;

    }
    asort($courses[$course]);


    $input = readline();
}
ksort($courses);
arsort($courses);

foreach ($courses as $cours => $name){
    echo $cours . ": " . count($name) . PHP_EOL;
    foreach ($name as $student){
        echo "-- " . $student . PHP_EOL;
    }
}

//print_r($courses);