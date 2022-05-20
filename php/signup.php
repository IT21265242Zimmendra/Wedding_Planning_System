<?php
    require'config.php';

    session_start();

    if(isset($_POST['submit']))
{    
     $b_name = $_POST['bname'];
     $g_name = $_POST['gname'];
     $email = $_POST['email'];
     $w_date = $_POST['wdate'];
     $c_mobile = $_POST['mobile'];
     $noofg = $_POST['nofg'];


     $date_now = new DateTime();
     $date2    = new DateTime($w_date);

     

     if ($date_now > $date2)
     {
        echo '<script>alert("Invalid wedding date")</script>';
        header('location:./../html/sign-up.html');

     }
   

     $sql = "INSERT INTO customer (Bride,Groom,Email,Wedding_Date,No_of_Guests)
     VALUES ('$b_name','$g_name','$email','$w_date',$noofg)";
     
     if ($con -> query($sql)) 
     {
        $u_name = $_POST['Uname'];
        $u_pswd = $_POST['pword'];
        $u_type = "User";
        $sql = "SELECT Cid FROM customer WHERE Email='$email'";

        $result = $con-> query($sql);
        $u_cid = $result-> fetch_assoc();
        $int_value = intval($u_cid['Cid']);
     
        $sql = "INSERT INTO users (Username,Password,Type,Cid)
        VALUES ('$u_name','$u_pswd','$u_type','$int_value')";

        if(!$con -> query($sql))
        {
           echo "<script>alert('Could not update user table')</script>";
        }
        else
       {
         $sql = "INSERT INTO customer_contact (Phone,Cid)
         VALUES ('$c_mobile','$int_value')";

         if(!$con -> query($sql))
         {
            echo "<script>alert('Could not update customer contact table')</script>";
         }
         else
         {
            $_SESSION['Username'] = $u_name;
            $_SESSION['Cid'] = $int_value;

            header("location:User.php");
         }
       }


     } 
     else
     {
        echo "Error!";
     }
    
}

?>