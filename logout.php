<?php
   include "db.php";
   session_start();
   session_unset();
   session_destroy();
   
   echo "<script>alert('You have been logged out!');
   </script>";
   header('location:index.php');
?>
