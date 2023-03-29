<?php
$name = $argv[1];
$year = $argv[2];
function voters($name,$year){
    $current_year = date("Y");
    $age = $current_year - $year;
    echo "Your name is " . $name . " and your age is " . $age;
    if($age >= 18){
        echo "\nYou are a voter";
    }else{
        echo "\nYou are not a voter";
    }
    if ($age >= 60){
        echo "\nYou are a senior citizen";
    }
}
voters($name,$year);
?>
