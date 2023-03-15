<?php

$nums = [5, 10, 20, 5, 30, 40];

echo array_sum(array_filter($nums,function ($num){
    return $num != 5;
}));

// Output
// 100