<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "weddingplanningsystem";

    $con = new mysqli($server, $username, $password, $database);

    if ( $con -> connect_error)
    {
        echo "<script> alert('Connection was not successful') </script>";
    }
?>
