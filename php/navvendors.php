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
        header('location:./../php/Salons.php');
    }
    else if($category_name == 'Florists')
    {
        header('location:./../php/Florists.php');
    }
    else if($category_name == 'Hotels and Food')
    {
        header('location:./../php/Hotels and Food.php');
    }
    else if($category_name == 'Invitation Cards')
    {
        header('location:./../php/Invitation.php');
    }
    else if($category_name == 'Music')
    {
        header('location:./../php/Music.php');
    }
    else if($category_name == 'Wedding Cars')
    {
        header('location:./../php/Vehicles.php');
    }
    else if($category_name == 'Wedding Photography')
    {
        header('location:./../php/Photographers.php');
    }


   

?>