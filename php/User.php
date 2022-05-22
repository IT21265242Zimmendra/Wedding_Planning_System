<?php

   require('config.php');

  session_start();

  $username = "";

  if (isset($_SESSION["Username"]))
  {
      $username = $_SESSION['Username'];
  }
  else
  {
      header('Location:login.php');
  }

?>



<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <link rel = stylesheet href ="../css/User.css?v=<?php echo time();?>"> 
    </head>
    <body>

        <div class="header">
            <div class = "container1">
                <div class="navbar">
                    <div class = "logo1">
                        <img src = "./../IMAGES/logo.png" width = "125px">
                    </div>
                    <nav>
                        <ul>
                            <li> <a href="././../php/User.php" class="active1">Home</a></li>
                            <li> <a href="./../php/userCategory.php"class="active1">Categories</a></li>
                            <li> <a href="./../html/about us.html" class="active1">About Us</a></li>
                        </ul>
                    </nav>
                    <div class="sign-in">
                      <button class="signinbtn"><img src = "./../IMAGES/pro.png"> &nbsp <?php echo $username ?></button>
                      <div class="sign-in-content">
                        <ul>
                            <li><a href="./../html/Visitor.html">Log Out</a></li>
                            <li><a href="./../php/usersetting.php">Settings</a></li>
                            <li><a href="./../php/userdashboard.php">Dashboard</a></li>
                        </ul>
                      </div>
                    </div>
                </div> 

                <div class="row">
                  <div class="col-2">
                      <h1>Start planning your wedding now!<br></h1>
                      <p>We're here to help throughout your planning. The one thing we can't do? Be there on your wedding day, coordinating like a professional planner with a clipboard and headset.
                          <br>  We'll be there in spirit!</p>
                      <a href="#" class="btn">Get Started! </a>
                  </div>

                  <div class="col-2">
                      <img src="./../IMAGES/check.png">
                  </div>

                </div>
            </div>
        </div>
       
        <div class="hearts">
            <img src="./../images/an3.png">
            <img src="./../images/an3.png">
            <img src="./../images/an3.png">
            <img src="./../images/an3.png">
            <img src="./../images/an3.png">
            <img src="./../images/an3.png">
            <img src="./../images/an3.png">
        
        </div> 
        
       
        <div class="footer">
            <div class="footer-contend">
                
                <img src="./../IMAGES/logo.png" class="logo2" heigth="10%" width="10%">
                <img src="./../IMAGES/play-store.png" class="bind1" heigth="10%" width="10%">
                <img src="./../IMAGES/app-store.png" class="bind1" heigth="10%" width="10%">
                <img src="./../IMAGES/Contact us.png" class="bind1" heigth="10%" width="10%">
                <img src="./../IMAGES/fb.png" class="bind2" heigth="3%" width="3%">
                <img src="./../IMAGES/inster.png" class="bind2" heigth="3%" width="3%">
                <img src="./../IMAGES/tw.png" class="bind2" heigth="3%" width="3%">

            </div>
        </div>
    
</body>
</html> 