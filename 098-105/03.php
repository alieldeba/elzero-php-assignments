<?php

    if (isset($_COOKIE["site"]["layout"])) {
        setcookie("site[layout]", "", time() - 1);
    }