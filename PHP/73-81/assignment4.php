<?php

echo "<pre>";

$filter_ls = filter_list();
$filter_id = [];
foreach($filter_ls as $filter){
    array_push($filter_id, filter_id($filter));
}
print_r(array_combine($filter_id, $filter_ls));

echo "</pre>";