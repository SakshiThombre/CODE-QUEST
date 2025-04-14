<?php
       session_start();
       if(!isset($_SESSION["studentname"]))
       {
           echo"<script>open('../signin.php','_self')</script>";   
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
              <style>
                     .stdpage1{
                            width: 98%;
                            height: 510px;
                     }
                     .user3{
                            padding: 20px;
                            color:white;
                            background-color:rgba(235, 235, 141, 0.45);
                            border-radius: 20px;
                            box-shadow: 2px 2px 2px black;
                     }
                     table th,td{
                            text-align: center;
                            font-weight: bold;
                     }
              </style>
       </head>
       <body style="background-image: url('images/img4.jpg'); background-size: 100%;">
              
              <?php
                     include("../header/header.php");
                     include("../header/menubar.php");
                     include("../savepages/search.php");
              ?>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 stdpage1">
                     
                    
                    
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                     
                    </div>
                    
                    
                   
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 user3">
                            
                            
                            <form action="" method="POST" role="form">
                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtname" name="txtname" placeholder="Search">
                                   </div>
                            </form>
                            

                            <div class="table-responsive">
                                   <table class="table  table-bordered" id="display"> 
                                          <thead>
                                                 <tr>
                                                        <th style="display: none;">Id</th>
                                                        <th>Subjects</th>
                                                        <th>Get Level</th>
                                                 </tr>
                                          </thead>
                                          <tbody>
                                          <?php
                                                 require("dbcon.php");
                                                 $sql="select *from tblsubjects";
                                                 $res=mysqli_query($link,$sql);
                                                 if(mysqli_num_rows($res)>0)
                                                 {
                                                        while($row=mysqli_fetch_array($res))
                                                        {
                                                        echo "<tr id='t1'>";
                                                        echo "<td style='display: none;'>".$row[0]; "</td>";
                                                        echo "<td>".$row[1]; "</td>";
                                                        ?>
                                                       

                                                        <td id="btntd">
                                                               <a href="questionset.php?btndelete=delete&subjects=<?php echo $row["subjects"];?>" type="button" class="btn btn-warning">
                                                                      <span class="glyphicon glyphicon-queen glyphicon1" aria-hidden="true"></span>
                                                               </a>
              
                                                        </td>
                                                        </tr>
                                                        <?php

                                                        }
                                                        
                                                 }
                                          ?>
                                          </tbody>
                                   </table>
                            </div>
                            
                     </div>
                     
                     
              </div>
              
            
              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
