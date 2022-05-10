<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "test1";

    $con = new mysqli($server, $username, $password, $database);

    if ( $con -> connect_error)
    {
        echo "<script> alert('Connection was not successful') </script>";
    }
?>
