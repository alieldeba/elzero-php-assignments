<?php

    $chars = ["o", "r", "e", "z", "l", "E"];

    $result = "";
    for ($i = count($chars) - 1; $i >= 0; $i--) { 
        $result .= $chars[$i];
    }

    echo "<pre>";
    print_r($result);
    echo "</pre>";

    // Output
    // "Elzero"