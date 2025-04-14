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
       include("subjectidsave.php");
       session_start();
       $subjectname=$_SESSION["subjectname"];
       $level= $_SESSION["level"];
       $stdname= $_SESSION["studentname"];

       if(isset($_GET["btnsavename"]))
       {
              $totalque=$_GET["totalque"];
              $totalmarks=$_GET["totalque"];
              $wrongans=$_GET["wrongans"];
              $rightans=$_GET["rightans"];
              $obtmarks=$_GET["rightans"];
              $sql="insert into tblexamuser values('$stdname','$subjectname','$level','$totalque','$totalmarks','$wrongans','$rightans','$obtmarks')";
              mysqli_query($link,$sql);
              
       }

       $sql="truncate tbltemp";
       if(mysqli_query($link,$sql))
       {
           
              unset($_SESSION["subjectname"]);
              unset($_SESSION["level"]);
              unset($_SESSION["count"]);
              echo"<script>Swal.fire({
                     imageUrl: '../master/images/a1.png',
                     imageWidth: 400,
                     imageHeight: 200,
                     imageAlt: 'Custom image'
                     }).then(function() {
                     window.location = '../master/subjects.php';
                     });</script>";
       }

?>