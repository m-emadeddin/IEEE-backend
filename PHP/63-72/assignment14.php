<?php

$nums = [10, 100, -20, 50, 30];

$mn = 1e18;
foreach($nums as $val){
    if($val < $mn) $mn = $val;
}

echo $mn;
// Output
// -20