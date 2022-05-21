<?php
    require('config.php');

    session_start();

    if (isset($_POST['btnLogIn']))
    {
        $username = $_POST["Uname"];
        $password = $_POST["pword"];
    
        $sql = "SELECT * from users WHERE Username = '$username'  AND password  = '$password'";
        $result = $con -> query($sql);
    
        if( $result -> num_rows == 1)
        {
            
            $row = $result-> fetch_assoc();

            if($row['Username'] == $username && $row ['Password'] == $password)
            {
                echo "You have successfully logged in";

                $_SESSION['Username'] = $row['Username'];
                $_SESSION['Type'] = $row['Type'];

                header("location:User.php");
            }

        }
        else
        {
            echo "Incorrect user name or password";
            header("location:log in.html");
        }


    }

   
?>