<?php

$nums = [11, 2, 10, 7, 20, 50];

$sum = 0;
foreach($nums as $val){
    $sum += $val;
}
echo $sum;
// Output
// 100