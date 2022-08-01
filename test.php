<?php

// include database page 
include ('DataBase.php');

// create a new ojbect for query
$obj = new query();

// calling getData()
$result = $obj->getData();
    echo "<pre>";
        print_r(($result));
        echo "</pre>";

?>