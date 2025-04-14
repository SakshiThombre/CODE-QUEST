<?php
    
       if(!isset($_SESSION["studentname"]))
       {
              echo"<script>open('../signup.php','_self')</script>";
       }
?>
<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
      .header1{
               background-color: rgba(31, 29, 29, 0.36);
      }
       .header2{
              margin: 0px 0px;
              padding: 0px 0px;
              top: 0px;
              font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
       }
       #img{
              width:200px;
              height: 200px;
              margin-top: -30px;
              margin-left: -45px;
       }
       .header2 h1{
              color: white;
              font-size:36px;
              text-shadow: 3px 3px 3px #333;
       }
       .header3 h3{
              font-size:24px;
              text-shadow: 3px 3px 3px #333;
       }
       .header3{
              margin: 0px 0px;
              padding: 0px 0px;
              top: 0px;
              font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
              text-align: center;
              color: white;
       }
       @media screen and (max-width:400px){
              .header2 h1{
              font-size:20px;
              }
              .header3 h3{
              font-size:15px;
              /* margin-left:-70px; */
               }
       }
     
</style>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 header1" >
       
       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 header2">
                <h1>CODE - QUEST</h1>                 
       </div>
       
       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 header3">
              <h3><?php echo $_SESSION["studentname"]; ?></h3>
       </div>
</div>

<?php
       // include("menubar.php");
?>
