<?php
    require('setSession.php');
?>




<html>
    <head>
        <link rel="stylesheet" href= "./../css/Salons.css?v=<?php echo time(); ?>">  
        <title>Bridal Salons| The Wedding Table</title>
    </head>
    <body>

         <!------------------------------Header------------------------------------>
         <div class="navbar">
            <div class = "logo1">
                <img src = "./../images/logo.png" width = "125px">
            </div>
            <nav>
                <ul>
                    <li> <a href="./../html/User.html" class="active1">Home</a></li>
                    <li> <a href="./../php/userCategory.php"class="active1">Categories</a></li>
                    <li> <a href="./../html/about us.html" class="active1">About Us</a></li>
                </ul>
            </nav>
            <div class="sign-in">
              <button class="signinbtn"><img src = "./../images/pro.png"> &nbsp <?php echo $name ?></button>
              <div class="sign-in-content">
                <ul>
                    <li><a href="#">Log Out</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Dashboard</a></li>
                </ul>
              </div>
            </div>
        </div> 

        <!-------------------body -->

        <h2>Bridal Salons</h2>

        <div class="Categories">
            <a href="./../php/after click form(v7).php"><div class="item1 item"><p><span>Dananjaya Bandara</span></p></div></a>
            <a href="./../php/after click form(v8).php"><div class="item2 item"><p><span>Salon Chandimal</span></p></div></a>
            <a href="./../php/after click form(v9).php"><div class="item3 item"><p><span>Ramani Fernando Salons</span></p></div></a>
            <a href="./../php/after click form(v10).php"><div class="item4 item"><p><span>Reluxe Salon</span></p></div></a>
            <a href="./../php/after click form(v11).php"><div class="item5 item"><p><span>InBa</span></p></div></a>
            <a href="./../php/after click form(v12).php"><div class="item6 item"><p><span>Jaal Salon</span></p></div></a>
        </div>

         <!-----------------------------------------Footer---------------------------->

         <footer>

            <div class="footer">
                    
                <img src="./../images/logo.png" class="logo2" height="15%" width="10%">
                    <img src="./../images/play-store.png" class="bind1" height="10%" width="10%">
                    <img src="./../images/app-store.png" class="bind1" height="10%" width="10%">
                    <img src="./../Iimages/Contact us.png" class="bind1" height="10%" width="10%">
                    

                <img src="./../images/fb.png" class="bind2"  width="3%">
                <img src="./../images/inster.png" class="bind2" width="3%">
                <img src="./../images/tw.png" class="bind2" width="3%">
                
            </div>

        </footer>

    </body>
</html>