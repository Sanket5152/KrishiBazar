<?php
  session_start();
  //session_destroy();
 unset($_SESSION["pwd"]);
 unset($_SESSION["mob"]);
  header("location: flogin.php?aa=1");
?>