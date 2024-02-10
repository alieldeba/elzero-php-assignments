<?php

    $nums = [10, 100, -20, 50, 30];

    $smallest = 0;
    foreach($nums as $num) {
        if ($num < $smallest) $smallest = $num;
    }
    echo $smallest;

    // Output
    // -20