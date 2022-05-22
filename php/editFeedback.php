<?php
    include("config.php");
    require('setCid.php');
?>
<!DOCTYPE html>
<html>
 <head>
 <link rel= "stylesheet" href = "../css/addFeedback.css">
 <title> Update Feedback | The Wedding Table </title>
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
    
<!----------------------------------------body------------------------------------------------>
    
     
    <div class = container>


    <?php
        $recordFid = $_GET['fid'];

        $sql = "SELECT * FROM feedback WHERE Fid = $recordFid";

        $result = $con ->  query($sql);

        if($result -> num_rows > 0){
            while($row = $result -> fetch_assoc()){
                $desc = $row['Description'];
                $fid = $row['Fid'];
            }
        }

    ?>
    
        <form method="post" action="../php/submitUpdateFeedback.php" >

            <!--Feedback ID(hidden) -->
            <input type="text"  name="field0" hidden value = <?php echo $fid ?> ><br><br>
            <!--textarea to edit feedback-->
            <label>Edit Your Feedback</label><br>
            <textarea name="field1"  maxlength="500" required> <?php echo $desc?></textarea><br><br>

            <!--Upload image-->
            <label>Upload Image</label><br>
            <input type="file" id="fileToUpload" name="field2" accept="image/*" ><br><br>

            <!--Update feedback-->
            <button type="submit" id = "btn" class="subbtn" name="btnS">Update Feedback</button>
            

        </form>
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