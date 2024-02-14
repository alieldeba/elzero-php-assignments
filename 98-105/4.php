<?php

    foreach ($_COOKIE["site"] as $cookie => $value) {
        setcookie("site[$cookie]", $value, 0);
    }