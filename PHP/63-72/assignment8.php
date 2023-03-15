<?php

$chars = ["A", "B", "C"];

echo "<pre>";

// METHOD 1
array_push($chars, "D");
print_r($chars);
array_pop($chars);


// METHOD 2
$d = ["D"];
$chars = array_merge($chars,$d);
print_r($chars);
array_pop($chars);


// METHOD 3
$chars[3] = 'D';
print_r($chars);
array_pop($chars);

// METHOD 4
$chars = explode(" ", (join(" ", $chars)." D"));
print_r($chars);
array_pop($chars);

echo "</pre>";
// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )