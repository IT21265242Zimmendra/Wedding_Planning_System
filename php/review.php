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