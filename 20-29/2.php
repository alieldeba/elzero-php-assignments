<?php

    $a = "10";

    echo (int) $a;
    echo "<br />";
    echo gettype((int) $a);
    echo "<br />";
    
    echo +$a;
    echo "<br />";
    echo gettype(+$a);
    echo "<br />";
    
    echo $a + 0;
    echo "<br />";
    echo gettype($a + 0);
    echo "<br />";
    
    // For The People Who Love Searching
    echo intval($a);
    echo "<br />";
    echo gettype(intval($a));
    echo "<br />";
    
    settype($a, "integer");
    echo $a;
    echo "<br />";
    echo gettype($a);
    echo "<br />";

    // Needed Ouput
    /*
    10
    "integer"
    10
    "integer"
    10
    "integer"
    */

    // For The People Who Love Searching
    /*
    10
    "integer"
    10
    "integer"
    */