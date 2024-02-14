<?php

    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";

    echo "Your Color Is ". $_COOKIE["site"]["color"] ." And Your Font Is " . $_COOKIE["site"]["font"];

    /*
    Array
    (
    [site] => Array
        (
        [color] => blue
        [font] => Swat
        [layout] => boxed
        )
    )
    "Your Color Is blue And Your Font Is Swat"
    */