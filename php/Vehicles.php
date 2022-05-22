<?php
    require('setSession.php');
?>




<html>
    <head>
        <link rel="stylesheet" href="./../css/Vehicles.css?v=<?php echo time(); ?>">    
        <title>Wedding Cars | The Wedding Table</title>
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

        <h2>Wedding Cars</h2>

        <div class="Categories">
            <a href="./../php/after click form(v25).php"><div class="item1 item"><p><span>Carsons Rent A Car</span></p></div></a>
            <a href="./../php/after click form(v26).php"><div class="item2 item"><p><span>Emcee Travels</span></p></div></a>
            <a href="./../php/after click form(v27).php"><div class="item3 item"><p><span>Wedding Wheels</span></p></div></a>
            <a href="./../php/after click form(v28).php"><div class="item4 item"><p><span>Dream Wedding Cars</span></p></div></a>
            <a href="./../php/after click form(v29).php"><div class="item5 item"><p><span>Star Wedding Car Service</span></p></div></a>
            <a href="./../php/after click form(v30).php"><div class="item6 item"><p><span>Kandy Cars</span></p></div></a>
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