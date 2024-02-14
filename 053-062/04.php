<?php

    $str = "<div><b>Elzero</b></div>";
    echo strip_tags($str, "<b>");
    // <b>Elzero</b>