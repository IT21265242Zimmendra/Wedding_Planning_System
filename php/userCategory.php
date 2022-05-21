<?php
    require('setSession.php');

?>



<html>
    <head>
        <link rel="stylesheet" href="./../CSS/Categories.css?v=<?php echo time(); ?>"> 
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
                            <li> <a href="./../php/User.php" class="active1">Home</a></li>
                            <li> <a href="./../php/userCategory.php"class="active1">Categories</a></li>
                            <li> <a href="./../html/about us.html" class="active1">About Us</a></li>
                        </ul>
                    </nav>
                    <div class="sign-in">
                      <button class="signinbtn"><img src = "./../IMAGES/pro.png"> &nbsp <?php echo $username ?></button>
                      <div class="sign-in-content">
                        <ul>
                            <li><a href="./../html/Visitor.html">Log Out</a></li>
                            <li><a href="./../php/adminsetting.php">Settings</a></li>
                            <li><a href="./../php/userdashboard.php">Dashboard</a></li>
                        </ul>
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
            <div class = "hvr"><a href='navvendors.php?id=Bridal Salons'><div class="Saloon"><p><span id = "1">Bridal Saloon</span></p></div></a></div>
            <div class = "hvr"><a href="navvendors.php?id=Florists"><div class="Florist"><p><span id = "2">Florist</span></p></div></a></div>
            <div class = "hvr"><a href="navvendors.php?id=Hotels and Food"><div class="FoodVen"><p><span id = "3">Hotel and Food</span></p></div></a></div>
            <div class = "hvr"><a href="navvendors.php?id=Invitation Cards"><div class="InvCards"><p><span id = "4">Invitation Card</span></p></div></a></div>
            <div class = "hvr"><a href="navvendors.php?id=Music"><div class="Music"><p><span id = "5">Music</span></p></div></a></div>
            <div class = "hvr"><a href="navvendors.php?id=Wedding Cars"><div class="Vehicle"><p><span id = "6">Wedding cars</span></p></div></a></div>
            <a><div class="invisible"></div></a>
            <a href="#"><a href="navvendors.php?id=Wedding Photography"><div class="Photography hvr"><p><span id = "7">Photography</span></p></div></a>
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

<?php

session_start();

if(isset($_SESSION['AddedCategory']))
{
    if ($_SESSION['AddedCategory'] == 1)
    {
        $_SESSION['AddedCategory'] = 0;
        echo "<script>alert('Category already added to cart')</script>";
    }
}


?>