<?php

$str = "<div><b>Elzero</b></div>";

// <b>Elzero</b>
echo strip_tags($str,substr($str,5,3));