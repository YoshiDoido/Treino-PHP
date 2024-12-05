<?php

echo "Please type in your name:\n";
$input = trim(readline());
$helloworld = "Hello World!";

if ($input == "Gabriel") {
    $response = $helloworld . "\n" . $input . "!\n";
    echo $response;
} else {
    echo "You are not Gabriel!\n";
}
?>