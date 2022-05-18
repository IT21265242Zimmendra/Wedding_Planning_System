<?php
include("config.php");

$desc = $_POST["descr"];
$cid = "ID001";


$sql = "INSERT INTO feedback(description , Cid)
        VALUES('$desc','$cid')";
 
if($conn->query($sql)){
    echo"<script>alert('Feedback inserted successfully!');</script>";
    header("location:feedback.php");

} 
else{
    echo"<script>alert('Error!');</script>";

}

$conn -> close();


?>