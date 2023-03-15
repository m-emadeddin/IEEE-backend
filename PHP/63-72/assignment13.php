<?php

$nums = [10, 100, -20, 50, 30];

$mx = -1e18;
foreach($nums as $val){
    if($val > $mx) $mx = $val;
}
echo $mx;

// Output
// 100