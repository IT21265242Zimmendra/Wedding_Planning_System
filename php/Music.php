<?php
    require('setSession.php');
?>




<html>
    <head>
        <link rel="stylesheet" href="./../CSS/Music.css?v=<?php echo time(); ?>">    
        <title>Music | The Wedding Table</title>
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

        <h2>Music</h2>

        <div class="Categories">
            <a href="#"><div class="item1"><p><span>Kurumba</span></p></div></a>
            <a href="#"><div class="item2"><p><span>Ministry</span></p></div></a>
            <a href="#"><div class="item3"><p><span>The Gypsies</span></p></div></a>
            <a href="#"><div class="item4"><p><span>Marians</span></p></div></a>
            <a href="#"><div class="item5"><p><span>JAYASRI</span></p></div></a>
            <a href="#"><div class="item6"><p><span>2FORTY2</span></p></div></a>
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