<?php

$nums = [10, 20, 30];

// Method 1
echo array_reduce($nums, function($num1, $num2){
    return $num1+$num2;
} );

// Method 2

echo array_sum($nums);
// Output
// 60
// 60