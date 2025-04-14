<?php
       session_start();
       unset($_SESSION["id"]);
       unset($_SESSION["subjectname"]);
       unset($_SESSION["questionset"]); 
       echo "<script> open('createsubjects.php','_self');</script>"; 

?>