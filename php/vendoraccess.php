<?php
  require("config.php");

  $sql = "SELECT Package_Name,Price
  From Package
  Where vid = '1' AND Package_Name = 'Package1'";

  $result = $con -> query($sql);
  if($result->num_rows>0){
    while($row = $result -> fetch_assoc()){
      echo $row["Package_Name"] . "<br>". $row["Price"];
    }

  }
 

?>