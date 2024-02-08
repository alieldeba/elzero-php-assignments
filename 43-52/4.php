<?php

    // Write Function Content Here
    function multiply(...$nums) {
        $result = 1;
        for ($i = 0; $i < sizeof($nums); $i++) {
            if (!$result && gettype($nums[$i]) == "integer") {
                $result = $nums[$i];
                continue;
            }
            if (gettype($nums[$i]) == "string") {
                continue;
            }
            if (gettype($nums[$i]) == "double") {
                $nums[$i] = (int)$nums[$i];
            }
            $result *= $nums[$i];
        }
        return $result . "<br />";
    }

    // Needed Output
    echo multiply(10, 20); // 200
    echo multiply("A", 10, 30); // 300
    echo multiply(100.5, 10, "B"); // 1000