<?php

$nums = [1, 13, 12, 20, 51, 17, 30];

foreach($nums as $num){
    echo !($num&1) ? ($num/2)."<br>":"";
}

// Output
// 6
// 10
// 15