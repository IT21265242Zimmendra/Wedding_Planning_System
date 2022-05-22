<?php
    require('config.php');
    require('setSession.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./../css/usersetting.css ?v=<?php echo time(); ?>">
    </head>

<body class="body">

    <div class="container">
            <nav>
                <img src = "./../images/logo.png" class = "logo">
                <div class = "details">
                    <img src = "./../images/pro.png" class = "logo1">
                
                    <a href = "#" ><?php echo $name ?></a>
                    <div class="admin-content">
                        <ul>
                            <li><a href="./../php/User.php">Home</a></li>
                            <li><a href="./../php/userdashboard.php">Dashboard</a></li>
                            <li><a href="./../html/Visitor.html">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>


    <div class ="container1">
       
            <h1>User Account Settings</h1>
            
            <form method="post" action="usersetting.php">
                <label for="uname" id="setting">Change User Name</label><br>
                <input type="text" id="setting" name="uname" pattern="{8,15}" title="  At least 8 or more characters" >
                <input type="submit" class="btn" name="username" value="Change"><br><br>
            </form> 
            
            <form method="post" action="usersetting.php">
                <label for="pswd" id="setting">Change Password</label><br>
                <input type="text" id="setting" name="pswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                <input type="submit" class="btn" name="userpassword" value="Change"><br><br>
            </form>

            <form method="post" action="usersetting.php">
                <label for="email" id="setting">Change Email</label><br>
                <input type="text" id="setting" name="email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" >
                <input type="submit" class="btn" name="useremail" value="Change"><br><br>
            </form>

            <form method="post" action="usersetting.php">
                <label for="nofg" id="setting">Change Number Of Guest</label><br>
                <input type="text" id="setting" name="nofg" >
                <input type="submit" class="btn" name="noofg" value="Change"><br><br>
            </form>

            <form method="post" action="usersetting.php">
                <label for="contact" id="setting">Change Contact Number</label><br>
                <input type="text" id="setting" name="contact" pattern="[0-9]{10}" title="Definitly there should be 10 digits">
                <input type="submit" class="btn" name="contact_n" value="Change"><br><br>
            </form>
            
            <form method="post" action="usersetting.php">
                <label for="dlt" id="setting">Delete Acoount</label>
                <input type="submit" class="btndlt" name="dltbtn" value="Delete"><br><br>
            </form>
               
    </div>

</body>
</html>




<?php

if(isset($_POST["username"]))
{
    $uname = $_POST["uname"];
    $sql = "UPDATE customer SET Username = '$uname' WHERE Uid = 'ID001'";
    var_dump($uname);

    if($con -> query($sql))
    {
        echo"Updated Successfully";
    }
}

if(isset($_POST["userpassword"]))
{
    $password = $_POST["pswd"];
    $sql = "UPDATE customer SET Password = '$password' WHERE Cid = 'ID001'";
    var_dump($password);

    if($con -> query($sql))
    {
        echo"Updated Successfully";
    }
}

if(isset($_POST["useremail"]))
{
    $uemail = $_POST["email"];
    $sql = "UPDATE customer SET Email = '$uemail' WHERE Cid = 'ID001'";
    var_dump($uemail);

    if($con -> query($sql))
    {
        echo"Updated Successfully";
    }
}

if(isset($_POST["noofg"]))
{
    $unoofg = $_POST["nofg"];
    $sql = "UPDATE customer SET No_of_Guests = '$unoofg' WHERE Cid = 'ID001'";
    var_dump($unoofg);

    if($con -> query($sql))
    {
        echo"Updated Successfully";
    }
}

if(isset($_POST["contact_n"]))
{
    $ucontact_n = $_POST["contact"];
    $sql = "UPDATE customer_contact SET Phone = '$ucontact_n' WHERE Cid = 'ID001'";

    if($con -> query($sql))
    {
        echo"Updated Successfully";
    }
}

if(isset($_POST["dltbtn"]))
{
    $udlt = $_POST["dltbtn"];
    $sql = "DELETE from customer  WHERE Cid = 'ID001'";

    if($con -> query($sql))
    {
        echo"Delete Successfully";
    }
}

?>