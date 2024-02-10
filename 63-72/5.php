<?php

    $nums = [5, 10, 20, 5, 30, 40];

    echo array_reduce($nums, fn($carry, $item) => $item !== 5 ? $carry + $item : $carry, 0);

    // Output
    // 100