<?php

    // Write Function Content Here
    function sum_all(...$nums) {
        $result = 0;
        for ($i = 0; $i < sizeof($nums); $i++) {
            if ($nums[$i] === 5) {
                continue;
            }
            if ($nums[$i] === 10) {
                $nums[$i] = 20;
            }
            $result += $nums[$i];
        }
        return $result . "<br />";
    }

    // Needed Output
    echo sum_all(10, 12, 5, 6, 6, 10); // 64
    echo sum_all(5, 10, 5, 10); // 40