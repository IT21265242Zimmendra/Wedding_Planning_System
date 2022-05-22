<?php
    require'config.php';


    session_start();

        if(isset($_POST['submit']))
        {
            $a_name = $_POST['adminame'];
            $a_pswd = $_POST['adminpassword'];
            $a_type = 'Admin';

            $sql = "INSERT INTO users (Username,Password,Type,Cid)
            VALUES ('$a_name','$a_pswd','$a_type',NULL)";

            $con -> query($sql);

            header('location:Admin.php');
        }

?>