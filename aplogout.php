<?php
  session_start();
   unset($_SESSION["pwd"]);
 unset($_SESSION["applace"]);
 
  header("location: aplogin.php?aa=1");
?>