<?php

$mix = [1, 2, "A", "B", "C", 3, 4];


$ignored = 0;
$printed = 0;

foreach($mix as $entry){
    if(is_numeric($entry)){
        echo $entry."<br>";
        $printed++;
    }
    else{
        $ignored++;
    }
}
echo "$printed Numbers Printed<br>";
echo "$ignored Letters Ignored";
// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"