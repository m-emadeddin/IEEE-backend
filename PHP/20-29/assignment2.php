<?php

$a = "10";

/*
// Needed Ouput
10
"integer"
10
"integer"
10
"integer"

*/

echo +$a;
echo "<br>";

echo gettype(+$a);
echo "<br>";

echo -(-$a);
echo "<br>";

echo gettype(-(-$a));
echo "<br>";


echo (int)$a;
echo "<br>";

echo gettype((int)$a);
echo "<br>";
