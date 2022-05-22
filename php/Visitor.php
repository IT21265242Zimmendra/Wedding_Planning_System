<?php
    require('config.php');
?>    
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <link rel = stylesheet href ="./../CSS/Visiter.css?v=<?php echo time(); ?>">
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
                                        <li> <a href="./../html/Visitor.html" class="active1">Home</a></li>
                                        <li> <a href="./../html/visitorcategory.html"class="active1">Categories</a></li>
                                        <li> <a href="./../html/about us_visitor.html" class="active1">About Us</a></li>
                                    </ul>
                                </nav>
                        <div class="sign-in">
                            <button class="visitorbtn" onclick = "location.href = './../html/sign-up.html'">Sign Up</button>
                            <button class="visitorbtn" onclick = "location.href = './../html/log in.html'">Log In</button>
                        </div>
                </div> 

                <div class="row">
                        <h1>THE<br>WEDDING TABLE</h1>
                        <h3>'Make your dream wedding a reality'</h3>
                </div>

 
            </div>
        </div>
     

        <div class="slideshow-container">

          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="./../IMAGES/slides1.jpg" style="width:100%">
            <div class="text">
            <?php  
            $sql = " select * 
            from feedback f, customer c
            where f.cid = c.cid and f.fid='1'";

            $result = $con->query($sql);


            if($result -> num_rows >0){
                while($row = $result-> fetch_assoc()){
                    echo "<div class='bgtext'>".$row["Bride"]." and ".$row["Groom"]."</div>";echo"<br>".$row["Description"];
                }
            }
            else{
                echo"<script>alert('No feedback to be displayed.');</script>";
            }
            ?> 
            </div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="./../IMAGES/slide2.jpg" style="width:100%">
            <div class="text">
            <?php  
            $sql = " select * 
            from feedback f, customer c
            where f.cid = c.cid and f.fid='2'";

            $result = $con->query($sql);


            if($result -> num_rows >0){
                while($row = $result-> fetch_assoc()){
                    echo "<div class='bgtext'>".$row["Bride"]." and ".$row["Groom"]."</div>";echo"<br>".$row["Description"];
                }
            }
            else{
                echo"<script>alert('No feedback to be displayed.');</script>";
            }
            ?> 
            </div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="./../IMAGES/slide3.jpg" style="width:100%">
            <div class="text">
            <?php  
            $sql = " select * 
            from feedback f, customer c
            where f.cid = c.cid and f.fid='3'";

            $result = $con->query($sql);


            if($result -> num_rows >0){
                while($row = $result-> fetch_assoc()){
                    echo "<div class='bgtext'>".$row["Bride"]." and ".$row["Groom"]."</div>";echo"<br>".$row["Description"];
                }
            }
            else{
                echo"<script>alert('No feedback to be displayed.');</script>";
            }
            ?> 
            </div>
          </div>
          
          </div>
          <br>
          
          
          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
          </div>

          <br><br>

          
          <script>
          let slideIndex = 0;
          showSlides();
          
          function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 5000); // Change image every 5 seconds
          }
          </script>

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
                
                <img src="./../IMAGES/logo.png" class="logo2" height="10%" width="10%">
                    <img src="./../IMAGES/play-store.png" class="bind1" height="10%" width="10%">
                    <img src="./../IMAGES/app-store.png" class="bind1" height="10%" width="10%">
                    <img src="./../IMAGES/Contact us.png" class="bind1" height="10%" width="10%">
                    
    
                <img src="./../IMAGES/fb.png" class="bind2"  width="3%">
                <img src="./../IMAGES/inster.png" class="bind2" width="3%">
                <img src="./../IMAGES/tw.png" class="bind2" width="3%">
                
        </div>
   </body>
</html>
    
    
</body>
</html>