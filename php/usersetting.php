<?php
    require'config.php';


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
        echo"Updated Successfully";
    }
}

?>