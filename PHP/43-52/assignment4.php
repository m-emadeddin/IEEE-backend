<?php

// Write Function Content Here
function multiply(){
    $sum = 1;
    foreach(func_get_args() as $val){
        if(gettype($val) == "string") continue;
        $sum *= (int)$val;
    }
    return $sum;
}
// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000