<?php

$nums = [1, 2, 3, 4, 5, 6];
$idx = [];
for($i = 0; $i<6; $i++){
    $r = rand(0,1);
    if($r) array_unshift($idx, $nums[$i]);
    else array_push($idx, $nums[$i]);
}

$nums = $idx;

print_r($nums);


// Output
// Every Time The Array Elements Will Be Shuffled

// Example 1
// Array
// (
//   [0] => 5
//   [1] => 1
//   [2] => 6
//   [3] => 2
//   [4] => 4
//   [5] => 3
// )

// Example 2
// Array
// (
//   [0] => 4
//   [1] => 3
//   [2] => 6
//   [3] => 1
//   [4] => 5
//   [5] => 2
// )