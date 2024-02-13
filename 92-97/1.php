<?php

    date_default_timezone_set("Asia/Riyadh");

    $d = date_create();

    echo date_default_timezone_get() . "<br />";
    echo date_format($d, "D, d M y - d:m:y A") . "<br />";
    echo date_format($d, "l, d F Y - d:m:y A");

    // Output Needed
    /*
    "Asia/Riyadh"
    "Wed, 09 Nov 22 - 07:11:22 PM"
    "Wednesday, 09 November 2022 - 07:11:22 PM"
    */