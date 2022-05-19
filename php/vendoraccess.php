<?php

  $sql = "SELECT Package_Name,Price
  From Package
  Where vid = '1'";

  $result = $con -> query($sql);


?>