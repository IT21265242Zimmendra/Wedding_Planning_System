<?php
    require('config.php');
    require('setCid.php');
    

    if(isset($_POST['btnypdate']))
    {
        $selected_package = $_POST['packagename']; 
        $selected_vendor = $_POST['vendorname'];
        $amounttobechanged = $_POST['amounttobechanged'];

        echo  $selected_package;
        echo  $selected_vendor;
        echo  $amounttobechanged;

        $selected_vendor = intval($selected_vendor);

                       

        $sql = "UPDATE package SET Price = '$amounttobechanged' Where Package_Name = '$selected_package' and Vid ='$selected_vendor'";
        
        if($con->query($sql))
        {
            echo "updated successfully";
        }
                 
         
    }

?>
  
