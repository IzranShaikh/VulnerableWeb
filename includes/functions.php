<?php

    function Connect()
    {
        global $connection;
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db = 'vwa';
        $connection = mysqli_connect($db_host , $db_user , $db_pass , $db);
        if(!$connection)
        {
        die("404 DATABASE NOT FOUND");
        }
    }

?>
