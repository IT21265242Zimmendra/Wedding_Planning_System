<?php
    
    require('config.php');


    $category_name = $_GET['id'];

    $sql = "Update category SET Number_of_Clicks = Number_of_clicks + 1 where Category_Name = '$category_name'";

    if ( $con -> query($sql))
    {
        echo "<script>console.log('Updated Successfully')</script>";
    }
    else
    {
        echo "<script>alert('Couldn't Update')</script>";
    }

    if ($category_name == 'Bridal Salons')
    {
        header('location:./../html/Salons.html');
    }
    else if($category_name == 'Florists')
    {
        header('location:./../html/Florists.html');
    }
    else if($category_name == 'Hotels and Food')
    {
        header('location:./../html/Hotels and Food.html');
    }
    else if($category_name == 'Invitation Cards')
    {
        header('location:./../html/InvC.html');
    }
    else if($category_name == 'Music')
    {
        header('location:./../html/Music.html');
    }
    else if($category_name == 'Wedding Cars')
    {
        header('location:./../html/Vehicles.html');
    }


   

?>