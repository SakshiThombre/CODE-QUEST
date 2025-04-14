
<!DOCTYPE html>
<html lang="">
       <head>
              <meta charset="utf-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>Title Page</title>

              <!-- Bootstrap CSS -->
              <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

              <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
              <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
              <!--[if lt IE 9]>
                     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
                     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
              <![endif]-->
              <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
       </head>
      
</html>

<?php
       require("dbcon.php");
       session_start();
       if(isset($_SESSION["studentname"]))
       {
              if($_SESSION["usertype"]=="Student")
              {
                     echo"<script>Swal.fire({
                            imageUrl: '../master/images/a2.png',
                            imageWidth: 400,
                            imageHeight: 200,
                            imageAlt: 'Custom image'
                            }).then(function() {
                            window.location = '../master/subjects.php';
                            });</script>";
              }
       }
       else if(isset($_POST["btnstudentlogin"]))
       {
            
              $logid=trim($_POST["txtstudentid"]);
              $password=trim($_POST["txtstudentpass"]); 
              $sql="select id,usertype,name,mobile from tblsignup where mobile='$logid' and password='$password'";
              $res=mysqli_query($link,$sql);
              if(mysqli_num_rows($res)>0) 
              { 
                    
                     if($row=mysqli_fetch_array($res))
                     {
                            
                            $text=$row["usertype"];
                            $trimmed=trim($text);
                           
                            if($trimmed=="Student")
                            {
                            
                                   $_SESSION["usertype"]=$trimmed;
                                   $_SESSION["studentname"]=$row["name"]; 
                                   $_SESSION["studentid"]=$row["id"];
                                   echo"<script>Swal.fire({
                                   imageUrl: '../master/images/a2.png',
                                   imageWidth: 400,
                                   imageHeight: 200,
                                   imageAlt: 'Custom image'
                                   }).then(function() {
                                   window.location = '../master/subjects.php';
                                   });</script>";
                                 
                                
                            }
                            else
                            {
                                   echo"<script>Swal.fire({
                                          icon: 'error',
                                          title: 'Oops...',
                                          text: 'Something went wrong!'
                                          }).then(function() {
                                          window.location = '../signin.php';
                                          });</script>";
                            }
                     }
                 
              }
              else
              {
                     echo"<script>Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!'
                            }).then(function() {
                            window.location = '../signin.php';
                            });</script>";
              }
       }
?>