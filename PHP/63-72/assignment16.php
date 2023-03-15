<?php

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

print_r(array_values(array_filter($mix, function($item){
    if(gettype($item) == "integer" && ($item&1)) return $item;
})));
// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )