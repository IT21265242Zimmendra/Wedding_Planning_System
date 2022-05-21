<?php
include("config.php");

$tot = $_POST["total"];
$cid = "1";
$date =  date("Y-m-d");

echo $date;

$sql = "INSERT INTO orders(order_date, amount , Cid)
        VALUES('$date', '$tot','$cid')";
 
if($con->query($sql)){
    echo"<script>alert('Order placed!');</script>";
    //header("location:");

} 
else{
    echo"<script>alert('Could not place order');</script>";

}

$con -> close();


?>

