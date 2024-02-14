<?php

    $index = 0;

    while ($index < 20) {
        $index++;
        if ($index % 2 == 0) {
            echo "$index <br />";
        }
    }

    for ($i = $index; $i < 20;) {
        $i++;

        if ($i % 2 == 0) {
            echo "$i <br />";
        }
    }

    do {
        $index++;
        if ($index % 2 == 0) {
            echo "$index <br />";
        }
    } while ($index < 20);

    // Needed Output
    /*
    2
    4
    6
    8
    10
    12
    14
    16
    18
    20
    */