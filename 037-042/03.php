<?php

    $num = 2;
    while ($num < 520) {
        // Your Code Here
        echo --$num . "<br />";
        $num++;
        $num += $num;
        $num++;
    }

    // Needed Output
    /*
    1
    4
    10
    22
    46
    94
    190
    382
    */