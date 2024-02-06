<?php

    echo $_SERVER['DOCUMENT_ROOT'];
    echo "<br />";
    echo $_SERVER['SERVER_NAME'];
    echo "<br />";
    echo dirname(__FILE__, 4);
    echo "<br />";
    echo ini_get('openssl.cafile');
    echo "<br />";