<?php

    date_default_timezone_set("Africa/Cairo");

    $date = "1990-10-01";

    $date_prev = date_create($date);

    $now = getdate();

    echo "From Epoch Time Till $date Is Approximately " . round((time() - strtotime('1990-10-01')) / 60 /60 / 24, 1) . " Days" . "<br />";
    echo "From Epoch Time Till $date Is Approximately " . round((time() - strtotime('1990-10-01')) / 60 / 60 / 24 / 365, 1) ." Years";

    // Output Needed
    /*
    "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
    "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"
    */