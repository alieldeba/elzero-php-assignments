<?php

    $num_one = -1;
    $num_two = 2.5;

    $let_one = "o";
    $let_two = "z";

    $str = "El%er0";

    // Write Your Code Here
    echo substr_replace(substr_replace($str, $let_one, $num_one), $let_two, $num_two, -$num_one); // Elzero