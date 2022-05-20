<?php
    require 'config.php';
    session_start();
?>

<!DOCTYPE html>
<html>
 <head>
 <link rel= "stylesheet" href = "../CSS/feedback.css?v=<?php echo time(); ?>">
 <title> Feedback | The Wedding Table </title>
 </head>
 <body>
      <!------------------------------Header------------------------------------>
      <div class="navbar">
            <div class = "logo1">
                <img src = "./../IMAGES/logo.png" width = "125px">
            </div>
            <nav>
                <ul>
                    <li> <a href="#" class="active1">Home</a></li>
                    <li> <a href="#"class="active1">Categories</a></li>
                    <li> <a href="#" class="active1">About Us</a></li>
                </ul>
            </nav>
            <div class="sign-in">
              <button class="signinbtn"><img src = "./../IMAGES/pro.png"> &nbsp Sign In</button>
              <div class="sign-in-content">
                <ul>
                    <li><a href="#">Log Out</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Dashboard</a></li>
                </ul>
              </div>
            </div>
        </div> 
<!---------------------------------------------------------------------------------------->

<div class="addfdbk">
<a class="anchr" href = "../html/addFeedback.html">
 <button>Add Feedback</button>
</a>
</div>
<br><br>
 <!-- add a table (f)--> 
 <div class = "feedbacktbl">
     <form method="get" action = "#">
     <?php
        /*$cusId =  $_SESSION['Username'];*/
        $sql = "SELECT*
                FROM feedback WHERE Cid = '1'/*$cusId*/";
        $result = $con->query($sql);
        
        if($result -> num_rows >0){
            echo"<table border='1' width = '650px' frame=void rules=rows>
            <h1 class='text1'>Your Feedback</h1><br>";
            while($row = $result-> fetch_assoc()){
                $fId = $row["Fid"];
                echo"<tr>
                <td class='text'>".$row["Description"]."</td>
                <td><button type='submit' class='edit_btn'><a class= 'anchr' href='editFeedback.php?fid=$fId'> EDIT </a></button></td>
                <td><button type = 'submit'class='del_btn'><a a class= 'anchr' href='deleteFeedback.php?fid=$fId'> DELETE </a></button></td>
                </tr>";

            }
            echo"</table>";

        }
        else{
            echo"<script>alert('You have not added any feedback');</script>";
        }
        $con -> close();

     ?>
 
 </div>

</div>

<!-----------------------------------------Footer---------------------------->

<footer>

<div class="footer">
        
    <img src="./../IMAGES/logo.png" class="logo2" height="15%" width="10%">
        <img src="./../IMAGES/play-store.png" class="bind1" height="10%" width="10%">
        <img src="./../IMAGES/app-store.png" class="bind1" height="10%" width="10%">
        <img src="./../IMAGES/Contact us.png" class="bind1" height="10%" width="10%">
        

    <img src="./../IMAGES/fb.png" class="bind2"  width="3%">
    <img src="./../IMAGES/inster.png" class="bind2" width="3%">
    <img src="./../IMAGES/tw.png" class="bind2" width="3%">
    
</div>

</footer>
 
 
 </body>
</html>
