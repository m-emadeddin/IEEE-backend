<?php

// Write Function Content Here
function get_arguments(){
    $var = "";
    foreach(func_get_args() as $val){
        $var .= $val." ";
    }
    return $var."<br>";
}

// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP