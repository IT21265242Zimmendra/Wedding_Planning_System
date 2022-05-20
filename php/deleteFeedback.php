<?php
    require('config.php');

    $recordFid = $_GET['fid'];

    $sql = "DELETE FROM feedback WHERE Fid = '$recordFid'";


    if( $con -> query($sql)){
        echo"<script>alert('Feedback Deleted')</script>";
        header("Location: feedback.php");
    }

    else{
        echo"<script>alert('Could not delete feedback')</script>";
    }



    $con -> close();


?>