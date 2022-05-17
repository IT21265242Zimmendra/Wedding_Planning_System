<?php
include("config.php");

$desc = $_POST["fdesc"];
$cid = "ID001";
$fid = 0;


$sql = "INSERT INTO feedback(Description, Cid)
        VALUES('$desc', '$cid')";
 
if($conn->query($sql)){
    echo"<script>alert('Feedback inserted successfully!')</script>";
    header("location:feedback.php");

} 
else{
    echo"<script>alert('Error!')</script>";

}

$conn -> close();


?>