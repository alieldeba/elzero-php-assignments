<?php

    // Write Function Content Here
    function calculate($num1, $num2, $operator = "a") {
        if ($operator == "a" || $operator == "add") {
            return $num1 + $num2 . "<br />";
        } elseif ($operator == "s" || $operator == "subtract") {
            return $num1 - $num2 . "<br />";
        } elseif ($operator == "m" || $operator == "multiply") {
            return $num1 * $num2 . "<br />";
        } else {
            return "لا توجد هذه العملية <br />";
        }
    }

    // Needed Output
    echo calculate(10, 20); // 30
    echo calculate(10, 20, "a"); // 30
    echo calculate(10, 20, "s"); // -10
    echo calculate(10, 20, "subtract"); // -10
    echo calculate(10, 20, "multiply"); // 200
    echo calculate(10, 20, "m"); // 200

