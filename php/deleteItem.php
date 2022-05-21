<?php
    require('config.php');
    
    $record_id = $_GET['id'];
   
    $sql = "delete from customer_package where Pid = '$record_id'";
  
    if ( $con -> query($sql))
    {
        echo "<script>Deleted succesfully</script>";
        header("location:cart.php");
    }
    else
    {
         echo "<script>Error in deleting</script>";
    }


?>