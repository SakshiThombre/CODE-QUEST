<?php
   require("dbcon.php");
   session_start();
   if(isset($_POST["btnsaveque"]))
   {
      $id=trim($_POST["txtid"]);
      $subject=trim($_POST["txtsubjects"]);
      $questionset=trim($_POST["txtquestionset"]);   
 
      $sql="insert into tblquestionset values('$id','$subject','$questionset')";
      if(mysqli_query($link,$sql))
      {
              echo "<script>alert('Level is Inserted....')</script>";
              echo"<script>open('../master/createsubjects.php','_self')</script>";     
      }
      mysqli_close($link);    
  
   }
   else if(isset($_GET["btndelete"]))
   {
        $id=$_GET["id"];
       $sql="delete from tblquestionset where id='$id'";
       if(mysqli_query($link,$sql))
       {
           echo "<script>alert('Recrod is Deleted')</script>";
           echo"<script>open('../master/createsubjects.php','_self')</script>";           
       }
   }
?>