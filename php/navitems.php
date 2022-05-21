<?php
    
    require('config.php');


    $vendor_name = $_POST['name'];

    $sql = "Update vendors SET Number_of_Clicks = Number_of_clicks + 1 where Vid = '$vendor_name'";
    ?>
