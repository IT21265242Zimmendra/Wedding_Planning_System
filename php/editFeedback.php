<?php
    include("config.php");
?>
<!DOCTYPE html>
<html>
 <head>
 <link rel= "stylesheet" href = "../css/addFeedback.css">
 <title> Update Feedback | The Wedding Table </title>
 </head>
 <body>
     <div class = navbar>

             <!----Navigation Bar -->

     <header>
        <div class="header">
            <div class = "container1">
                <div class="navbar">
                    <div class = "logo1">
                        <img src = "../images/logo.png" width = "125px">
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
                        </div>
                </div> 

                </div>
            </div>
        </div>
    </header>
<!---------------------------------------------------------------------------------------->
     </div>
     <div class="flex-wrap">
    <div class = container>


    <?php
        $recordFid = $_GET['fid'];

        $sql = "SELECT * FROM feedback WHERE Fid = $recordFid";

        $result = $conn ->  query($sql);

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
            <button type="submit" id = "btn" name="btnS">Update Feedback</button>
            

        </form>
    </div>
 
    <!-----------------------Footer--------------------------->

    
        <div class="footer">
                
            <img src="../images/logo.png" class="logo2" height="10%" width="10%">
                <img src="./../IMAGES/play-store.png" class="bind1" height="10%" width="10%">
                <img src="./../IMAGES/app-store.png" class="bind1" height="10%" width="10%">
                <img src="../images/Contact us.png" class="bind1" height="10%" width="10%">
                

            <img src="../images/fb.png" class="bind2"  width="3%">
            <img src="../images/inster.png" class="bind2" width="3%">
            <img src="../images/info.png" class="bind2" width="3%">
            
        </div>

    </div>

        

 
 </body>
</html>