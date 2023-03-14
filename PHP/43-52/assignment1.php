<?php

function greeting($name, $gender="none"){
    $title="";
    if($gender == "Male") $title = "Mr ";
    else if($gender == "Female") $title = "Miss ";
    return "Hello $title$name<br>";
}
// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh