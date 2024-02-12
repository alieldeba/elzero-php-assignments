<?php

    mkdir("Programming/PHP", 0711, true);

    if (file_exists("Programming/PHP")) {
        rmdir("Programming/PHP");
        echo "Directory Programming/PHP Removed" . "<br />";
    }

    if (file_exists("Programming")) {
        rmdir("Programming");
        echo "Directory Programming Removed";
    }

    // Output
    /*
    "Directory Programming/PHP Removed"
    "Directory Programming Removed"
    */