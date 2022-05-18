<?php

    require('config.php');

    $newFid = $_POST["field0"];
    $newDesc = $_POST["field1"];

    $sql = "UPDATE feedback
            SET Description = '$newDesc'
            WHERE Fid = '$newFid'";

    if($conn -> query($sql)){
        header("Location: feedback.php");
    }
    else{
        echo"<script>alert('Could not update feedback')</script>";
    }

    $conn -> close();

?>