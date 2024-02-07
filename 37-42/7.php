<?php

    $mix = [1, 2, "A", "B", "C", 3, 4];

    $numbers_count = 0;
    $letters_count = 0;

    foreach ($mix as $element) {
        if (gettype($element) == 'string') {
            $letters_count++;
        } else if (gettype($element) == "integer") {
            $numbers_count++;
            echo $element . "<br />";
        }
    }

    echo "$numbers_count Numbers Printed";
    echo "<br />";
    echo "$letters_count Letters Ignored";

    // Output
    /*
    1
    2
    3
    4
    "4 Numbers Printed"
    "3 Letters Ignored"
    */