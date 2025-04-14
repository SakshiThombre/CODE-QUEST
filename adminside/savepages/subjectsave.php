<?php
       require("dbcon.php");
       session_start();
       if(isset($_POST["btnsavesubject"]))
       {
              $id=trim($_POST["txtid"]);
              $subject=trim($_POST["txtsubject"]);

              $sql="select * from tblsubjects where id='$id'";
              $res=mysqli_query($link,$sql);
              if(mysqli_num_rows($res)>0)
              {
                     $sql="delete from tblsubjects where id='$id'";
                     if(mysqli_query($link,$sql))
                     {
                            echo "<script>alert('Subject is updated....')</script>";
                            echo"<script>open('../master/createsubjects.php','_self')</script>"; 
                     }
              }

              $sql="insert into tblsubjects values('$id','$subject')";
              if(mysqli_query($link,$sql))
              {
                     echo "<script>alert('Subject is inserted....')</script>";
                     echo"<script>open('../master/createsubjects.php','_self')</script>";
              }
              mysqli_close($link);
       }
       else if(isset($_GET["btndelete"]))
       {
              $id=$_GET["id"];
              $sql="delete from tblsubjects where id='$id'";
              if(mysqli_query($link,$sql))
              {
                     echo "<script>alert('Subject is Deleted....')</script>";
                     echo"<script>open('../master/createsubjects.php','_self')</script>";
              }
       }
?>