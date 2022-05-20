<?php
    require 'config.php';
?>

<!DOCTYPE html>
<html>
 <head>
 <link rel= "stylesheet" href = "../CSS/feedback.css?v=<?php echo time(); ?>">
 <title> Feedback | The Wedding Table </title>
 </head>
 <body>
     <!-- Nav bar-->
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

<div class="addfdbk">
<a class="anchr" href = "../html/addFeedback.html">
 <button>Add Feedback</button>
</a>
</div>
<br><br>
 <!-- add a table (f)--> 
 <div class = "feedbacktbl">
     <form method="get" action = "#">
     <?php
        $sql = "SELECT*
                FROM feedback";
        $result = $con->query($sql);
        
        if($result -> num_rows >0){
            echo"<table border='1' width = '650px' frame=void rules=rows>
            <h1 class='text1'>Your Feedback</h1><br>";
            while($row = $result-> fetch_assoc()){
                $fId = $row["Fid"];
                echo"<tr>
                <td class='text'>".$row["Description"]."</td>
                <td><button type='submit' class='edit_btn'><a class= 'anchr' href='editFeedback.php?fid=$fId'> EDIT </a></button></td>
                <td><button type = 'submit'class='del_btn'><a a class= 'anchr' href='deleteFeedback.php?fid=$fId'> DELETE </a></button></td>
                </tr>";

            }
            echo"</table>";

        }
        else{
            echo"<script>alert('You have not added any feedback');</script>";
        }
        $con -> close();

     ?>
 
 </div>

</div>
 
 
 </body>
</html>
