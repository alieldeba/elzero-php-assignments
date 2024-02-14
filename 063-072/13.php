<?php

    $nums = [10, 100, -20, 50, 30];

    $biggest = 0;
    foreach($nums as $num) {
        if ($num > $biggest) $biggest = $num;
    }
    echo $biggest;

    // Output
    // 100