<?php

$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here
echo str_repeat(strtolower(substr_replace($str,$char,$num,0)),$num);

// aaa_aaa_aaa_