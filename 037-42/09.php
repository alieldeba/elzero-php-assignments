<?php

    $help_num = 3;
    $nums = [4, 5, 6, 1, 2, 3];
    $names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

    for ($i = $help_num; $i < sizeof($nums); $i++) { 
        if ($nums[$i] === $help_num) break;
        
        echo $names[$nums[$i]];
        echo "<br />";
    }

    // Output
    /*
    "Sayed"
    "Osama"
    */