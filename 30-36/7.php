<?php

    $num_one = 23;
    $num_two = 5;
    $op = "+";

    switch ($op) {
        case '+':
            echo $num_one + $num_two;
            break;
        case '-':
            echo $num_one - $num_two;
            break;
        case '/':
            echo (int)($num_one / $num_two);
            echo "<br />";
            echo $num_one % $num_two;
            break;
        case '*':
            echo $num_one * $num_two;
            break;
        default:
            echo "Unknown Operation";
    }