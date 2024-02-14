<?php

    function change_permissions($file) {
        if(!is_file($file)) {
            return "This Is Directory And Only Files Allowed" . "<br />";
        }

        if(!str_ends_with($file, ".txt")) {
            return "File Extension Is Not Txt" . "<br />";
        }

        chmod($file,0700);
        return "Permissions Changed" . "<br />";
    }

    // Test Cases
    echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
    echo change_permissions("Work.docx"); // File Extension Is Not Txt
    echo change_permissions("Result.txt"); // Permissions Changed