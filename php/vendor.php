<?php
    
    require('config.php');


    $category_name = $_GET['id'];

    $sql = "Update category SET Number_of_Clicks = Number_of_clicks + 1 where Category_Name = '$category_name'";

    if ( $con -> query($sql))
    {
        echo "<script>alert('Updated Successfully')</script>";
    }
    else
    {
        echo "<script>alert('Couldn't Update')</script>";
    }

?>