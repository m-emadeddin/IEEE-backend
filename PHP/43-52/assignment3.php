<?php

// Write Function Content Here
function sum_all(){
    $sum = 0;
    foreach(func_get_args() as $val){
        if($val == 5) continue;
        else if($val == 10) $sum += 20;
        else $sum += $val;
    }
    return $sum;
}

// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40