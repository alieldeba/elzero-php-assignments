<?php

    $mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

    echo "<pre>";
    print_r(array_filter($mix, fn($item) => gettype($item) == "integer" && $item % 2 != 0));
    echo "</pre>";

    // Output
    /*
    Array
    (
    [0] => 1
    [1] => 3
    [2] => 5
    [3] => 7
    )
    */