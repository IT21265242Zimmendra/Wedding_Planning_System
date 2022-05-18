<?php
    require'config.php';

    if(isset($_POST['submit']))
{    
     $b_name = $_POST['bname'];
     $g_name = $_POST['gname'];
     $email = $_POST['email'];
     $w_date = $_POST['wdate'];
     $c_mobile = $_POST['mobile'];
     $noofg = $_POST['nofg'];
     $sql = "INSERT INTO customer (Bride,Groom,Email,Wedding_Date,No_of_Guest)
     VALUES ('$b_name','g_name','$email','w_date','noofg') WHERE Cid ='ID001' ";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>