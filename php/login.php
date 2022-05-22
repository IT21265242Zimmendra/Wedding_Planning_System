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

                $_SESSION['Username'] = $username;

                if($row['Type'] == 'User')
                {
                    $_SESSION['Cid'] = $row['Cid'];
                    header("location:User.php");
                }
                else if($row['Type'] == 'Admin')
                {
                    header("location:Admin.php");
                }

            }

        }
        else
        {
            echo "<script>Incorrect user name or password</script>";
            header("location:log in.html");
        }


    }

   
?>