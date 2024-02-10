<?php

    $chars = ["A", "B", "C"];

    // $chars[] = "D";
    // $chars[count($chars)] = "D";
    // $chars += [count($chars) => "D"];
    array_push($chars, "D");

    echo "<pre>";
    print_r($chars);
    echo "</pre>";

    // Output
    /*
    Array
    (
    [0] => A
    [1] => B
    [2] => C
    [3] => D
    )
    */