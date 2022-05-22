<?php
    require('setSession.php');
    require('setCid.php');
?>





<html>
    <head>
        <link rel="stylesheet" href="./../CSS/Hotels.css?v=<?php echo time(); ?>">   
        <title>Hotels and Food | The Wedding Table</title>
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
              <button class="signinbtn"><img src = "./../IMAGES/pro.png"> &nbsp <?php echo $username ?></button>
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

        <h2>Hotels and Food</h2>

        <div class="Categories">
            <a href="./../php/after click form(v1).php"><div class="item1 item"><p><span>Cinnamon Grand</span></p></div></a>
            <a href="./../php/after click form(v2).php"><div class="item2 item"><p><span>Shangri-La</span></p></div></a>
            <a href="./../php/after click form(v3).php"><div class="item3 item"><p><span>The Grand Kandyan Hotel</span></p></div></a>a
            <a href="./../php/after click form(v4).php"><div class="item4 item"><p><span>Golden Crown Hotel</span></p></div></a>
            <a href="./../php/after click form(v5).php"><div class="item5 item"><p><span>Mahaweli Reach Hotel</span></p></div></a>
            <a href="./../php/after click form(v6).php"><div class="item6 item"><p><span>The Kingsbury</span></p></div></a>
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