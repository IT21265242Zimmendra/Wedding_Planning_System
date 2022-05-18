<?php
  require("config.php");
?>




<html>
    <head>
        <link rel="stylesheet" href="../css/Categories.css">
    </head>
    <body>
        <!------------------------------Header------------------------------------>
        <header>
            <div class="header">
                <div class = "container1">
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
                                <button class="visitorbtn">Sign Up</button>
                                <button class="visitorbtn">Log In</button>
                            </div>
                    </div> 
    
                    </div>
                </div>
            </div>
        </header>

        <!------------------------------Body------------------------------------>

        <h2>Categories</h2>

        <!--------------------------------Grid---------------------------------->
        <div class="Categories">
            <a href="#"><div class="FoodVen"><p><span id = "1">Food & Venue</span></p></div></a>
            <a href="#"><div class="Florist"><p><span id = "2">Florist</span></p></div></a>
            <a href="#"><div class="InvCards"><p><span id = "3">Invitation Cards</span></p></div></a>
            <a href="#"><div class="Photography"><p><span id = "4">Wedding Photographers</span></p></div></a>
            <a href="#"><div class="Saloon"><p><span id = "5">Salons</span></p></div></a>
            <a href="#"><div class="Vehicle"><p><span id = "6">Wedding Cars</span></p></div></a>
        </div>

        <!-----------------------------------------Footer---------------------------->

        <footer>

            <div class="footer">
                    
                <img src="./../IMAGES/logo.png" class="logo2" height="10%" width="10%">
                    <img src="./../IMAGES/play-store.png" class="bind1" height="10%" width="10%">
                    <img src="./../IMAGES/app-store.png" class="bind1" height="10%" width="10%">
                    <img src="./../IMAGES/Contact us.png" class="bind1" height="10%" width="10%">
                    

                <img src="./../IMAGES/fb.png" class="bind2"  width="3%">
                <img src="./../IMAGES/inster.png" class="bind2" width="3%">
                <img src="./../IMAGES/tw.png" class="bind2" width="3%">
                
            </div>

        </footer>

        <?php

          $sql = "select* from category";
          $result = $con -> query($sql);

         

          if ( $result -> num_rows > 0)
          {
              $id = 0;
        
              while ($row = $result -> fetch_assoc())
              {
                  $id++;
                  $category = $row['Category_Name'];
                  echo "<script> document.getElementById('$id').innerHTML =  '$category' </script>";
              }
          }
          else
          {
            echo "<script> console.log('No entires') </script>";
          }
          // document.getElementById('$id').innerHTML = " . $row["Category_Name"] . 
        ?>
    </body>
</html>