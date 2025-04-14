<?php
       require("dbcon.php");
       session_start();
       if(isset($_SESSION["name"]))
       {
              if( $user =="Admin")
              {
                     echo"<script>alert('Welcome Admin')</script>";
                     echo"<script>open('../master/user.php','_self')</script>";
              }
       }
       else if(isset($_POST["btnadminlogin"]))
       {
              $logid=trim($_POST["txtuserid"]);
              $password=trim($_POST["txtpassword"]); 
              $sql="select usertype,staffname,mobile from tblstaff where mobile='$logid' and password='$password'";
              $res=mysqli_query($link,$sql);
              if(mysqli_num_rows($res)>0)
              { 
                     if($row=mysqli_fetch_array($res))
                     {
                            $text=$row[0];
                            $trimmed=trim($text);
                           
                            if($trimmed=="Admin")
                            {
                                   $_SESSION["usertype"]=$trimmed;
                                   $_SESSION["name"]=$row["staffname"];
                                   echo"<script>alert('Welcome Admin')</script>";
                                   echo"<script>open('../master/user.php','_self')</script>";
                            }
                            else
                            {
                                   echo"<script>alert('Invalid Logid & Password')</script>";
                                   echo"<script>open('../adminlogin.php','_self')</script>";
                            }
                     }
                 
              }
              else
              {
                     echo"<script>alert('Inavalid id or password')</script>";
                     echo"<script>open('../adminlogin.php','_self')</script>";              }
       }
?>