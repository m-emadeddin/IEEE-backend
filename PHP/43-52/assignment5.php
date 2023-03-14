<?php

function get($arr, $type){
    foreach($arr as $val){
        if(gettype($val) == $type) return $val;
    }
}

function check_status($a, $b, $c) {
    $name = get(func_get_args(), "string");
    $age = get(func_get_args(), "integer");
    $available = get(func_get_args(), "boolean");
    $result = "Hello $name, Your Age Is $age, ";
    if($available){
        $result .= "You Are Available For Hire";
    }
    else{
        $result .= "You Are Not Available For Hire";
    }
    return $result."<br>";
}

  // Needed Output
  echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"