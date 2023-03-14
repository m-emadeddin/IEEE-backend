<?php

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for($i = $start; $i < count($mix); $i++){
    if(!($i == 0 or !is_numeric($mix[$i]))){
        echo $mix[$i]."<br>";
    }
}
// Output
// 2
// 3
// 4