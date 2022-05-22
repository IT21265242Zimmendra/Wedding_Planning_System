<?php
  require("config.php");
  session_start();

  $name = "";

  if (isset($_SESSION["Username"]))
  {
      $name = $_SESSION['Username'];
  }
  else
  {
      header('Location:login.php');
  }
?>
