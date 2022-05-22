<?php
  require("config.php");
  session_start();

  $cid = "";

  if (isset($_SESSION["Cid"]))
  {
      $cid = $_SESSION['Cid'];
  }

?>