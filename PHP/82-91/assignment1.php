<?php

echo round((disk_total_space("C:")+disk_total_space("M:"))/pow(1024,4), 2) . " Terabytes<br>";

// Output Examples
// "1.37 Terabyte"
// "0.46 Terabyte"