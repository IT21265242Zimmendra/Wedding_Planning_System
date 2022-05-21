<?php
    require('config.php');
    require('cid.php');


    
    if(isset($_POST["adminname"]))
   {
       
       $uname = $_POST["uname"];
       $sql = "UPDATE users SET Username = '$uname' WHERE Uid = 'UD001'";
       

       if($con -> query($sql))
       {
           echo "Updated successfully";
       }
   }
   if(isset($_POST["adminpwrd"]))
   {
    
       $password = $_POST["pswd"];
       $sql = "UPDATE users set Password = '$password' where Uid = 'UD001'";
       if($con ->query($sql)){
           echo "Updated successfully";
       }
   }
   if(isset($_POST["deletaccount"])){
        
       $delete = $_POST["deletaccount"];
       $sql = "DELETE FROM users where Uid = 'UD001'";

       if($con->query($sql)){
           echo "Deleted successfully";
       }
   }
  


?>
