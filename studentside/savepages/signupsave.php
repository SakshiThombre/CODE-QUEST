<?php
  require("dbcon.php");
  session_start();
  if(isset($_POST["btnsignup"]))
  {
       $id=$_POST["txtid"];
       $usertype=$_POST["txtusertype"];
       $name=$_POST["txtname"];
       $college=$_POST["txtcollege"];
       $mobile=$_POST["txtmobile"];
       $email=$_POST["txtemail"];
       $pass=$_POST["txtpassword"];
       $sql="insert into tblsignup values('$id','$usertype','$name','$college','$mobile','$email','$pass')";
       if(mysqli_query($link,$sql))
       {
              echo"<script>alert('Record is inserted')</script>";
              echo"<script>open('../startpage1.php','_self')</script>";
       }
       else
       {
              echo mysqli_error($link);
       }
       mysqli_close($link);
  }
?>