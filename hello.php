<?php
// File name: hello.php


function greet() {
    $message = "Hello";
    $message .= " World";
    $message .= " Today is ";
    $message .= date("m d y");


    return $message;
}
echo greet();
?>
