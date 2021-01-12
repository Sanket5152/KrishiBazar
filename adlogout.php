<?php
  session_start();
   unset($_SESSION["pwd"]);
 unset($_SESSION["login"]);
 
  header("location: adminlogin.php?aa=1");
?>