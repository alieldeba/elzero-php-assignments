<?php

    // Write Function Content Here
    function get_arguments(...$words) {
        $all = "";
        $words = func_get_args();
        foreach ($words as $word) {
            $all .= $word . " ";
        }
        return $all . "<br />";
    }

    // Needed Output
    echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
    echo get_arguments("I", "Love", "PHP"); // I Love PHP