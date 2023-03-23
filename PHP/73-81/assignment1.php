<?php


// get random value between 10 & 20, make sure 10 & 20 doesn't appear.

// solution 1:
echo mt_rand(11, 19).'<br>';

// solution 2:
$a = mt_rand(10, 20);
while($a == 10 || $a == 20){
    $a = mt_rand(10, 20);
}
echo $a;