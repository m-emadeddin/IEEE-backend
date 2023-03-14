<?php

$day = "Sun";

if(in_array($day,["Sat","Sun","Mon"])){
    echo "We Are Open All The Day";
}
else if(in_array($day,["Tue","Wed"])){
    echo "We Are Open From 08:12";
}
else if(in_array($day,["Thu","Fri"])){
    echo "We Are Closed";
}
else{
    echo "Unknown Day";
}