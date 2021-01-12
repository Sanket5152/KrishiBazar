<?php
  session_start();
   unset($_SESSION["pwd"]);
 unset($_SESSION["user"]);
 
  header("location: tlogin.php?aa=1");
?>