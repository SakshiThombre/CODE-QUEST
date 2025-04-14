<?php
       require("dbcon.php");
       session_start();
       if(isset($_POST["btncreateusersave"]))
       {
              $id=trim($_POST["txtid"]);
              $usertype=trim($_POST["txtusertype"]);
              $staffname=trim($_POST["txtstaffname"]);
              $mobile=trim($_POST["txtmobile"]);
              $password=trim($_POST["txtpass"]);
              $email=trim($_POST["txtemail"]);
              $city=trim($_POST["txtcity"]);

              $sql="select * from tblstaff where id='$id'";
              $res=mysqli_query($link,$sql);
              if(mysqli_num_rows($res)>0)
              {
                     $sql="delete from tblstaff where id='$id'";
                     if(mysqli_query($link,$sql))
                     {
                            echo"<script>alert('Record is Updated')</script>";
                            echo"<script>open('../master/createuser.php','_self')</script>";
                     }
              }

              $sql="insert into tblstaff values('$id','$usertype','$staffname','$mobile','$password','$email','$city')";
              if(mysqli_query($link,$sql))
              {
                     echo"<script>alert('Record is Inserted')</script>";
                     echo"<script>open('../master/createuser.php','_self')</script>";
              }
              mysqli_close($link);
       }
       else if(isset($_GET["btndelete"]))
       {
              $id=$_GET["id"];
              $sql="delete from tblstaff where id='$id'";
              if(mysqli_query($link,$sql))
              {
                     echo"<script>alert('Record is Inserted')</script>";
                     echo"<script>open('../master/createuser.php','_self')</script>";
              }
       }
?>