<?php

    function check_status($a, $b, $c) {
        // Function Code Here
        $name;
        $age;
        $status;

        if (gettype($a) == "string") $name = $a;
        elseif (gettype($b) == "string") $name = $b;
        else $name = $c;

        if (gettype($a) == "integer") $age = $a;
        elseif (gettype($b) == "integer") $age = $b;
        else $age = $c;

        if (gettype($a) == "boolean") $status = $a;
        elseif (gettype($b) == "boolean") $status = $b;
        else $status = $c;

        if ($status) $status = "You Are Available For Hire";
        else  $status = "You Are Not Available For Hire";

        return "Hello $name, Your Age Is $age, $status <br />";
    }
    
    // Needed Output
    echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"