<?php

    // Code 1
    $a = @$b or die("Custom Error");

    // Code 2
    $f = @file("Not_A_File") or die("Custom Error");

    // Code 3
    @include("Not_A_File") or die("Custom Error");