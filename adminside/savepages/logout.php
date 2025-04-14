<?php
       session_start();
       session_destroy();
       echo "<script>open('../adminlogin.php','_self')</script>";
?>