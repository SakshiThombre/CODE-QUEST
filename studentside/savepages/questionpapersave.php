<?php
       session_start();
       require("dbcon.php");
       // $subjectid=$_SESSION["id"];
       $subjectname=$_SESSION["subjectname"];
       $level= $_SESSION["level"];
       $count=$_SESSION["count"];
       if(isset($_POST["btnsub"]))
       {
             
              $question=$_POST["question"];
              $option=$_POST["option"];
              $correctans=$_POST["correctans"];
              $sql="select *from tbltemp where questionno='$count' and subject='$subjectname' and questionset='$level'";
              $res=mysqli_query($link,$sql);
              if(mysqli_num_rows($res)>0)
              {
                     $sql="delete from tbltemp where subject='$subjectname' and questionset='$level' and questionno='$count'";
                     if(mysqli_query($link,$sql))
                     {
                            echo "<script>alert('Answer updated....')</script>";
                            echo"<script>open('../master/questionpaper.php','_self')</script>";       
                     }
              }
            
              $sql="insert into tbltemp values('$subjectname','$level','$count','$question','$option','$correctans')";
              if(mysqli_query($link,$sql))
              {
                     echo"<script>open('../master/questionpaper.php','_self')</script>";  
              }
       } 
      
?>