<?php

// elzeroo.txt Content
// Hello Osamaa Web
// School

$file = fopen("elzeroo.txt","c+");

fseek($file, mb_strlen("Hello "));

fwrite($file, "Elzero");
fclose($file);

// elzeroo.txt New Content
// Hello Elzero Web
// School