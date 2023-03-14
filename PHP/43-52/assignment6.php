<?php

// Write Function Content Here
function calculate($a, $b, $op = "add"){
    $operation = substr($op,0,1);
    switch($operation){
        case "a":
            return ($a+$b)."<br>";
        
        case "s":
            return ($a-$b)."<br>";
        
        case "m":
            return ($a*$b)."<br>";
        
        default:
            return "This operation isn't found!!<br>";
    }
}
// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200
