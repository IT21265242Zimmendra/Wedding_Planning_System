<?php
include("config.php");

$desc = $_POST["descr"];
$cid = "1";


$sql = "INSERT INTO feedback(description , Cid)
        VALUES('$desc','$cid')";
 
if($con->query($sql)){
    echo"<script>alert('Feedback inserted successfully!');</script>";
    header("location:feedback.php");

} 
else{
    echo"<script>alert('Error!');</script>";

}

$con -> close();


?>