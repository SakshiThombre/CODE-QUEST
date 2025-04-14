<?php
       session_start();
       if(!isset($_SESSION["studentname"]))
       {
           echo"<script>open('../signin.php','_self')</script>";   
       }

       if (!isset($_SESSION["subjectname"])) {
              echo "<script>open('../signin.php','_self')</script>";
       }

       if (!isset($_SESSION["level"])) {
              echo "<script>open('../signin.php','_self')</script>";
       }
?>

<!DOCTYPE html>
<html lang="">
       <head>
              <meta charset="utf-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>Title Page</title>
              <link rel="icon" href="../images/logo.png" type="png/x-icon" />
              <!-- Bootstrap CSS -->
              <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
              <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
              <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
              <!--[if lt IE 9]>
                     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
                     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
              <![endif]-->
              <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
              <style>
                     .stdpage1{
                            width: 100%;
                            height: 510px;
                          
                     }
                     .user3{
                            top:30px;
                            padding: 20px;
                            color:black;
                            background-color:rgba(194, 194, 175, 0.83);
                            border-radius: 20px;
                            box-shadow: 2px 2px 2px white;
                          
                     }
                     .d1{
                            display: flex;
                            align-items: center;
                            justify-content: center;
                     }
                     .d1 img{
                            padding:5px;
                     }
                     form #question{
                            font-weight: bold;
                     }
                     ::-webkit-scrollbar {
                            display: none;
                     }
                    
              </style>
       </head>
       <body style="background-image: url('images/res.jpg'); background-size: 100% 100%;">
              
              <?php
                     require("dbcon.php");
                     include("../header/header.php");
                     // $subjectid=$_SESSION["id"];
                     $subjectname=$_SESSION["subjectname"];
                     $level= $_SESSION["level"];
                     
              ?>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 stdpage1 w3-container w3-center w3-animate-zoom">
                     
                    
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                     
                    </div>
                    
                     
                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 user3">
                            
                            <table class="table table-bordered table-responsive table-hover" style="display: none;">
                                   <thead>
                                          <tr>
                                                 <th>Q.No</th>
                                                 <th>Question</th>
                                                 <th>You-Selected</th>
                                                 <th>Answer</th>
                                                 <th>Marks</th>
                                          </tr>
                                   </thead>
                                   <tbody>
                                        <?php
                                         $one=1;
                                         $zero=0;
                                         $countmarks=0;
                                         $countwmarks=0;
                                          $sql="select * from tbltemp";
                                          $res=mysqli_query($link,$sql);
                                          if(mysqli_num_rows($res)>0)
                                          {
                                                 while($row=mysqli_fetch_array($res))
                                                 {
                                                      
                                                        echo "<tr>";
                                                        echo "<td>".$row[2]; "</td>";
                                                        $totalque=$row[2];
                                                        echo "<td>".$row[3]; "</td>";
                                                        echo "<td>".$row[4]; "</td>";
                                                        echo "<td>".$row[5]; "</td>";
                                                        if($row[4]==$row[5])
                                                        {
                                                           echo "<td>" .$one; "</td>";
                                                           $countmarks=$countmarks+1;
                                                        }
                                                        else
                                                        {
                                                           echo "<td style='color: red'>" .$zero; "</td>";
                                                           $countwmarks=$countwmarks+1;
                                                        }
                                                        echo "</tr>";
                                                 }
                                          }
                                        ?>
                                   </tbody>
                            </table>
                            <?php 
                                   if($countmarks==10)
                                   {
                                          ?>
                                          <div class="d1">
                                                 <audio src="../audio/audio2.mp3" autoplay></audio>
                                                        <img src="../images/rank1.png" class="img-responsive" alt="Image" style="height: 100px; width:100px;">
                                          </div>
                                                        
                                          <?php
                                   }
                                   else if($countmarks>=7 && $countmarks<10)
                                   {
                                          ?>
                                                   <div class="d1">    
                                                   <audio src="../audio/audio1.mp3" autoplay></audio> 
                                                        <img src="../images/rank2.png" class="img-responsive" alt="Image" style="height: 100px; width:100px;">
                                                   </div>      
                                          <?php
                                   }
                                   else if($countmarks>=5 && $countmarks<7)
                                   {
                                          ?>
                                                     <div class="d1">   
                                                     <audio src="../audio/audio3.mp3" autoplay></audio>
                                                        <img src="../images/rank3.png" class="img-responsive" alt="Image" style="height: 100px; width:100px;">
                                                     </div>   
                                          <?php
                                   } 
                                   else if($countmarks>=1 && $countmarks<=5)        
                                   {
                                          ?>
                                                        <div class="d1">
                                                        <audio src="../audio/audio4.mp3" autoplay></audio>
                                                        <img src="../images/pass2.png" class="img-responsive" alt="Image" style="height: 100px; width:100px;">
                                                        </div>
                                          <?php
                                   }
                                   else 
                                   {
                                          ?>
                                                       <div class="d1"> 
                                                       <audio src="../audio/audio5.mp3" autoplay></audio>
                                                        <img src="images/preview.png" class="img-responsive" alt="Image" style="height: 100px; width:100px;">
                                                         <b>BEST OF LUCK FOR NEXT TIME !</b>
                                                        </div>
                                          <?php
                                   }
                                   
                            ?>
                            <p>Total Question :- <b><?php echo $totalque ?></b></p>
                            <p>Total Marks :- <b><?php echo $totalque ?> </b></p>
                            <p>Wrong Answer :- <b><?php echo $countwmarks ?> </b></p>
                            <p>Right Answer :- <b><?php echo $countmarks ?> </b></p>
                            <p>Obtained Marks :- <b><?php echo $countmarks ?></b></p>

                            <!-- <button type="button" class="btn btn-danger btn-block" onclick="destroy()">Exit</button> -->

                            <a href="../savepages/destroyresult.php?btnsavename=&totalque=<?php echo $totalque; ?>&wrongans=<?php echo $countwmarks; ?> &rightans=<?php echo $countmarks; ?>" type="button" class="btn btn-danger btn-block">
                                   <span aria-hidden="true">Exit</span>
                            </a>
                     </div>
                     
                     
                     <script>
                            function destroy()
                            {
                                   open("../savepages/destroyresult.php","_self");
                            }
                     </script>
                            
                          
                            
                    
              </div>
              
            
              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
