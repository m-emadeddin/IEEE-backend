<?php

// elzero.txt Content
// Hello Elzero Web
// School
// No Need To Read

$file = fopen("elzero.txt", "r");

for($i = 0; $i < 2; $i++){
    echo fgets($file);
}

echo "<br>";
rewind($file);

$length = mb_strlen("Hello Elzero Web\r\nSchool\r\n");

echo fread($file,$length);

echo "<br>";
rewind($file);

echo fgets($file).fgets($file);

echo "<br>";
rewind($file);

echo substr(file_get_contents("elzero.txt"), 0, strlen("Hello Elzero Web School ")); 

fclose($file);
// Needed Output
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"