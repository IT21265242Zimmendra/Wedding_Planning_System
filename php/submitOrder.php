<?php
    require("setSession.php");
    require("setCid.php");


    $tot = $_SESSION['Totalprice'] ;
    $Cid = $cid;
    $date =  date("Y-m-d");

    echo $date;

    $sql = "INSERT INTO orders(order_date, amount , Cid)
            VALUES('$date', '$tot','$Cid')"; 
    
    if($con->query($sql))
    {
        echo"<script>alert('Order placed!');</script>";
        header("location:userdashboard.php");
    } 
    else
    {
        echo"<script>alert('Could not place order');</script>";
    }

    $con -> close();


?>

