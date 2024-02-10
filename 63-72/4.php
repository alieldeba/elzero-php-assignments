<?php

    $nums = [10, 20, 30];

    echo array_reduce($nums, fn($carry, $item) => $carry + $item);
    echo "<br />";
    echo array_sum($nums);

    // Output
    /*
    60
    60
    */