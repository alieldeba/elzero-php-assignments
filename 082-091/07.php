<?php

    $fileName = "elzero2.txt";

    $fileContent = file_get_contents($fileName);

    $oldWord = 'Osamaa';
    $newWord = 'Elzero';

    $newContent = str_replace($oldWord, $newWord, $fileContent);

    file_put_contents($fileName, $newContent);