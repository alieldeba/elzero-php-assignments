<?php

    $help_num = 4;
    $nums = [2, 4, 5, 6, 10];

    $start = $help_num - $help_num;

    foreach ($nums as $num) {
        echo $nums[$start] . " + " . $nums[$help_num] . " = " . $nums[$start] + $nums[$help_num];
        echo "<br />";
        $help_num--;
        $start++;
    }

    // Output
    /*
    "2 + 10 = 12"
    "4 + 6 = 10"
    "5 + 5 = 10"
    "6 + 4 = 10"
    "10 + 2 = 12"
    */