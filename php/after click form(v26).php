<?php
    require('config.php');
    

?>

<!DOCTYPE html>
<html>
    
    <head>
<link rel = "stylesheet" href = "./../CSS/afterclickform(v26).css?v=<?php echo time(); ?>">


    </head>
    <body>
    <div class ="container">
<<<<<<< Updated upstream
    
=======
 
>>>>>>> Stashed changes
       
       
        <h1>
        <?php 
        

        $sql = "SELECT Name 
        From vendors    
        Where vid = '26'";

        $result = $con -> query($sql);
        if($result->num_rows>0){
        while($row = $result -> fetch_assoc()){
        echo $row["Name"] ;
        }

        }


?>
</h1>
            <img src = "./../images/EmceeTravels.jpg" class = "hotelimages">
            <div class="description"><h3>
                <?php 
                    $sql = "select description from vendors where vid = '26'";
                    $result = $con->query($sql);

                    if($result ->num_rows>0)
                    {
                        while($row=$result->fetch_assoc())
                        {
                            echo $row ["description"];
                        }
            
                    }
                    else
                    {
                        echo "<script>alert('No record')</srcipt>";
                        echo "no result";
                    } 

                   
                ?>
            <h3></div>

    
            <div class="package">
                <nav>
                    <ul>
                    
                    &nbsp;&nbsp;&nbsp;  <li><button class = "btnpackage"><a href="navitems.php?id=76"><p>
 

                        <?php
  
  $sql = "SELECT Package_Name,Price
  From Package
  Where vid = '26' AND Package_Name = 'Package 1'";

  $result = $con -> query($sql);
  if($result->num_rows>0){
    while($row = $result -> fetch_assoc()){
        echo $row["Package_Name"] . "<br><br>Rs.". $row["Price"].".00";
    }

  }
 

?></p></a></button></li>
                    &nbsp;&nbsp; &nbsp; <li><button class = "btnpackage"><a href="navitems.php?id=77"><p><?php
  require("config.php");

  $sql = "SELECT Package_Name,Price
  From Package
  Where vid = '26' AND Package_Name = 'Package 2'";

  $result = $con -> query($sql);
  if($result->num_rows>0){
    while($row = $result -> fetch_assoc()){
        echo $row["Package_Name"] . "<br><br>Rs.". $row["Price"].".00";
    }

  }
 

?></p></a></button></li>
                     &nbsp;&nbsp;&nbsp;  <li><button class = "btnpackage"><a href="navitems.php?id=78"><p><?php
  require("config.php");

  $sql = "SELECT Package_Name,Price
  From Package
  Where vid = '26' AND Package_Name = 'Package 3'";

  $result = $con -> query($sql);
  if($result->num_rows>0){
    while($row = $result -> fetch_assoc()){
      echo $row["Package_Name"] . "<br><br>Rs.". $row["Price"].".00";
    }

  }
 

?></p></a></button></li>
                        
                    </ul>
                </nav>
            </div>
        
        <div>

<<<<<<< Updated upstream
   
=======

>>>>>>> Stashed changes
  </body>
</html>