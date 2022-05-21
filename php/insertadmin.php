<?php
    require('config.php');
    if(isset($_POST['submit'])){
        $name = $_POST['adminame'];
        $adminpassword = $_POST['adminpassword'];
        $sql = "INSERT INTO users(Uid,Username,password,type,)
        VALUES('','$name','$adminpassword','Admin') 
        if($con -> query($sql))
       {
           echo "inserted successfully";
       }
    }
?>