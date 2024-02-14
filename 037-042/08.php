<?php

    $nums = [1, 13, 12, 20, 51, 17, 30];

    foreach ($nums as $num) {
        if ($num % 2 == 0) {
            echo $num / 2;
            echo "<br />";
        }
    }

    // Output
    /*
    6
    10
    15
    */