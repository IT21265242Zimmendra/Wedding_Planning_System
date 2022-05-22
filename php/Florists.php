<?php
    require('setSession.php');
    require('setCid.php');
?>




<html>
    <head>
        <link rel="stylesheet" href="./../css/Florists.css?v=<?php echo time(); ?>">   
        <title>Florists | The Wedding Table</title>
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
              <button class="signinbtn"><img src = "./../images/pro.png"> &nbsp <?php echo $username ?></button>
              <div class="sign-in-content">
                <ul>
                    <li><a href="#">Log Out</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Dashboard</a></li>
                </ul>
              </div>
            </div>
        </div> 

        <!-------------------body ---------------------->

        <h2>Florists</h2>

        <div class="Categories">
            <a href="./../php/after click form(v19).php"><div class="item1 item"><p><span>Lassana Flora</span></p></div></a>
            <a href="./../php/after click form(v20).php"><div class="item2 item"><p><span>Shirohana</span></p></div></a>
            <a href="./../php/after click form(v21).php"><div class="item3 item"><p><span>Blooms Flower Shop</span></p></div></a>
            <a href="./../php/after click form(v22).php"><div class="item4 item"><p><span>Chamathkara Flora</span></p></div></a>
            <a href="./../php/after click form(v23).php"><div class="item5 item"><p><span>Flower Bug</span></p></div></a>
            <a href="./../php/after click form(v24).php"><div class="item6 item"><p><span>amalka flora</span></p></div></a>
        </div>

         <!-----------------------------------------Footer---------------------------->

         <footer>

            <div class="footer">
                    
                <img src="./../images/logo.png" class="logo2" height="15%" width="10%">
                    <img src="./../images/play-store.png" class="bind1" height="10%" width="10%">
                    <img src="./../images/app-store.png" class="bind1" height="10%" width="10%">
                    <img src="./../images/Contact us.png" class="bind1" height="10%" width="10%">
                    

                <img src="./../images/fb.png" class="bind2"  width="3%">
                <img src="./../images/inster.png" class="bind2" width="3%">
                <img src="./../images/tw.png" class="bind2" width="3%">
                
            </div>

        </footer>

    </body>
</html>