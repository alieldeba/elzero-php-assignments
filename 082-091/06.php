<?php

    $handle = fopen("elzero.txt", "r");
    for ($i = 0; $i < 2; $i++) {
        echo fgets($handle);
    }

    rewind($handle);

    echo "<br />";

    fclose($handle);

    echo file_get_contents("elzero.txt", true, NULL, 0, 24);

    echo "<br />";
    
    echo implode(" ", array_slice(file('elzero.txt'), 0, 2));

    echo "<br />";

    foreach (array_slice(file('elzero.txt'), 0, 2) as $line) {
        echo trim($line) . ' ';
    }

    // Needed Output
    /*
    "Hello Elzero Web School"
    "Hello Elzero Web School"
    "Hello Elzero Web School"
    "Hello Elzero Web School"
    */