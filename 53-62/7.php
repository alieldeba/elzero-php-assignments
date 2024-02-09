<?php

    $chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

    echo ucfirst(strtolower(implode(array_filter($chars, fn($char) => !is_numeric($char)))));

    // Output
    // "Elzero"