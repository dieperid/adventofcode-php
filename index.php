<?php
$file = file("input/input.txt");
    $val = explode(",", $file[0]);
    $bingoVal = array_slice($val,0,5);
    var_dump($bingoVal);
    print_r($val);



?>