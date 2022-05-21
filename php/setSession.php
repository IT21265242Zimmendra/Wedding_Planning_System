<?php
  require("config.php");
  session_start();

  $username = "";

  if (isset($_SESSION["Username"]))
  {
      $username = $_SESSION['Username'];
  }
  else
  {
      header('Location:login.php');
  }
?>
