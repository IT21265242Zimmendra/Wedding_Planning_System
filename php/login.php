<?php
    require('config.php');
    require('cid.php');

    session_start();

    if(isset($_POST["uname"]) && isset($_POST["pword"])){
        $uname = $_POST["uname"];
        $pword = $_POST["pword"];
        
        $sql = "SELECT * from users WHERE Username = '$uname'  AND password  = '$pword' " ;
        $result = $con -> query($sql);
        if(num_rows($result)===1){
            
            $row = fetch_assoc($result);

            if($row['Username'] === $uname && $row ['Password'] === $psword){
                echo "You have successfully logged in";

                $_SESSION['Username'] = $row['Username'];
                $_SESSION['Type'] = $row['Type'];

                header("location:");
                exit();
            }
            else{
                echo "Incorrect user name or password";
                exit();
            }

        }

    }
?>