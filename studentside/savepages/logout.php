<?php
       session_start();
       session_destroy();
       echo "<script>open('../index.php','_self')</script>";
?>