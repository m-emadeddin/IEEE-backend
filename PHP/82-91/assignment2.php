<?php

$size = filesize("C:\Users\muhammed\Downloads\\videoplayback.mp4");
echo "Size In Megabytes Is ". round($size / pow(1024,2))."<br>";
echo "Size In Kilobytes Is ". round($size / 1024)."<br>";
// Output
// "Size In Megabyte Is 32"
// "Size In Kilobyte Is 33261"