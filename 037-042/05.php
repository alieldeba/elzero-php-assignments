<?php

    $start = 0;
    $mix = [1, 2, 3, "A", "B", "C", 4];

    for ($i = $start; $i < sizeof($mix); $i++) {
        if ($i === $start) {
            $i++;
        }
       
        if (gettype($mix[$i]) == "integer") {
            echo $mix[$i];
        }
    }

    // Output
    /*
    2
    3
    4
    */