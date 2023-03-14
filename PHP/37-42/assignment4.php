<?php

$start = 10;
$end = 0;
$stop = 3;

for($i = $start; $i >= $stop; $i--){
    echo ($i >= 10 ? $i : "0".$i)."<br>";
}

// Needed Output
// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03