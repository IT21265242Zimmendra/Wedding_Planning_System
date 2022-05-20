<?php
    require('config.php');
    require('cid.php');

?>

<!DOCTYPE html>
<html>
    <head>
<link rel = "stylesheet" href = "./../CSS/afterclickform.css?v=<?php echo time(); ?>">


    </head>
    <body>
    <div class ="container">
    <form>
       
       
        <h1>
        <?php 
            require("config.php");

        $sql = "SELECT Name 
        From vendors    
        Where vid = '1'";

        $result = $con -> query($sql);
        if($result->num_rows>0){
        while($row = $result -> fetch_assoc()){
        echo $row["Name"] ;
        }

        }


?>
</h1>
            <img src = "./../images/cinnamon grand.jpg" class = "hotelimages">
            <div class="description"><h3>
                <?php 
                    $sql = "select description from vendors where vid = '1'";
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

                    $con->close();
                ?>
            <h3></div>

    
            <div class="package">
                <nav>
                    <ul>
                        <li><button class = "btnpackage"><a href="#">
 

                        <?php
  require("config.php");

  $sql = "SELECT Package_Name,Price
  From Package
  Where vid = '1' AND Package_Name = 'Package 1'";

  $result = $con -> query($sql);
  if($result->num_rows>0){
    while($row = $result -> fetch_assoc()){
      echo $row["Package_Name"] . "<br>". $row["Price"];
    }

  }
 

?></a></button></li>
                        <li><button class = "btnpackage"><a href="#">         <?php
  require("config.php");

  $sql = "SELECT Package_Name,Price
  From Package
  Where vid = '1' AND Package_Name = 'Package 2'";

  $result = $con -> query($sql);
  if($result->num_rows>0){
    while($row = $result -> fetch_assoc()){
      echo $row["Package_Name"] . "<br>". $row["Price"];
    }

  }
 

?></a></button></li>
                        <li><button class = "btnpackage"><a href="#"><?php
  require("config.php");

  $sql = "SELECT Package_Name,Price
  From Package
  Where vid = '1' AND Package_Name = 'Package 3'";

  $result = $con -> query($sql);
  if($result->num_rows>0){
    while($row = $result -> fetch_assoc()){
      echo $row["Package_Name"] . "<br>". $row["Price"];
    }

  }
 

?></a></button></li>
                        
                    </ul>
                </nav>
            </div>
        
        <div>

    </form>
  </body>
</html>