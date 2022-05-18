<?php
    require('config.php');
    require('cid.php');


    
    if(isset($_POST["adminname"]))
   {
       
       $uname = $_POST["uname"];
       $sql = "UPDATE users SET Username = '$uname' WHERE Uid = 'UD001'";
       var_dump($uname)

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
           echo "updated successfully";
       }
   }
   


?>
