<?php
// Test Case 1
$a = 100;
$b = 200;
$c = 300;

// A Is Not Larger Than B Or C


// Test Case 2
$a = 200;
$b = 100;
$c = 300;

// A Is Larger Than B

// Test Case 3
$a = 200;
$b = 200;
$c = 100;

// A Is Larger Than c

// Solution

if($a > $b){
    echo "A Is Larger Than B";
}
else if($a > $c){
    echo "A Is Larger Than C";
}
else{
    echo "A Is Not Larger Than B Or C";
}

