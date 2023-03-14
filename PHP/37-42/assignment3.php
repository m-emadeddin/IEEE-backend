<?php

$num = 2;
while ($num < 520) {
    if($num == 2){
        echo $num-1;
        $num *= 2;
    }
    else{
        echo $num;
        $num  = $num*2+2;
    }
    echo "<br>";
}

// Needed Output
// 1
// 4
// 10
// 22
// 46
// 94
// 190
// 382