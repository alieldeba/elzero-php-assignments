<?php

    date_default_timezone_set("Africa/Cairo");
    echo date_default_timezone_get() . "<br />";

    $date = "2005-10-02";
    $d = date_create($date);

    date_modify($d, "+15 seconds +15 minutes +15 hours");
    echo date_format($d, "Y, F, l 'dS' s:i:H");

    // Output Needed
    /*
    "Africa/Cairo"
    "2005, October, Sunday '02nd' 15:15:15"
    */