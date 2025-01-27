<?php
   session_start();
   $msg="";
   unset($_SESSION['IS_LOGIN']);
   header('location: https://moolareddy.com/login.php');
   die();
 ?>
