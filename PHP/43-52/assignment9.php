<?php

// Write Function Content Here
$greet = function ($name){
    return "Greetings $name";
};

// Arrow Fn
$greet = fn ($name) => "Greetings $name";

// Needed Output
echo $greet("Osama"); // Greetings