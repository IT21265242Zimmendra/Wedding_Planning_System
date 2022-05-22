<?php
    require('config.php');
    
    $order_id = $_GET['id'];
    $OrderId = intval($order_id);
    $sql = "delete from orders where OrderId = '$order_id'";
  
    if ( $con -> query($sql))
    {
        echo "Deleted succesfully";
        header("location:ordertable.php");
    }
    else
    {
         echo "Error in deleting";
    }


?>