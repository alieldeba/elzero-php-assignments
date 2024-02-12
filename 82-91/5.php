<?php

    echo basename(__FILE__) . "<br />";
    echo pathinfo(__FILE__)["basename"] . "<br />";
    echo basename($_SERVER['SCRIPT_FILENAME']) . "<br />";
    echo basename($_SERVER['PHP_SELF']) . "<br />";

    // Output
    /*
    "index.php"
    "index.php"
    "index.php"
    "index.php"
    */