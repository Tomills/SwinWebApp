<?php
    $host = "feenix-mariadb.swin.edu.au";
    $user = "s102481568";
    $pwd = "250198";
    $sql_db = "s102481568_db";

    $conn = @mysqli_connect (
        $host,
        $user,
        $pwd,
        $sql_db
    );
?>