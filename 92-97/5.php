<?php

    // With time() Function
    // echo time() . "<br>"; // 1668020233

    echo strtotime("now") . "<br>";
    echo floor(microtime(true)) . "<br>";
    $dateTime = new DateTime();
    echo $dateTime->getTimestamp();

    // Output Needed With Other Ways
    /*
    1668020233
    1668020233
    1668020233
    */