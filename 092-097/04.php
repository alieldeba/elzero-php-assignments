<?php

    date_default_timezone_set("Africa/Cairo");

    $date = "1990-10-01";

    $reg = date_create($date);
    $now = date_create();

    $diff = date_diff($reg, $now);

    echo "From Epoch Time Till $date Is Approximately ". $diff->days ." Days" . "<br />";
    echo "From Epoch Time Till $date Is Approximately " . $diff->y ." Years";