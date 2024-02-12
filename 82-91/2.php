<?php

    echo "Size In Megabyte Is " . round(filesize("C:\Users\aliel\Videos\Bandicam\bandicam 2023-12-18 23-31-03-993.mp4") / 1024 / 1024);
    echo "<br />";
    echo "Size In Kilobyte Is " . round(filesize("C:\Users\aliel\Videos\Bandicam\bandicam 2023-12-18 23-31-03-993.mp4") / 1024);

    // Output
    /*
    "Size In Megabyte Is 32"
    "Size In Kilobyte Is 33261"
    */