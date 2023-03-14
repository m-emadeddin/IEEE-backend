<?php

$index = 0;

while($index+2 <= 20){
    echo ($index+++2)."<br>";
    $index++;
}

echo "<br>";

$index = 0;
for(; $index+2<=20; $index+=2){
    echo ($index+2)."<br>";
}

echo "<br>";

$index = 0;
do{
    echo ($index+++2)."<br>";
    $index++;
}while($index+2 <= 20);

// Needed Output
// 2
// 4
// 6
// 8
// 10
// 12
// 14
// 16
// 18
// 20