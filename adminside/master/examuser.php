
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
       </head>
       <style>
              /* div{
                     border: 1px solid black;
              } */
              .user1{
                     height: 500px;
                     top: 50px;
              }
              .user3{
                     top: 0px;
                     padding: 20px;
                     background-color: white;
                     border-radius: 20px;
                     box-shadow: 1px 1px 10px black;
              }
              #i1{
                     width:40px;
                     height:40px;
              }
              thead th{
                     text-align: center;
              }
              @media screen and (max-width:400px){
                     .user1{
                            padding:0px;
                            top:50px;
                     } 
                     .table-responsive{
                           padding:0px;
                           margin: 0px;
                     }
                     .user3{
                            border-radius: 0px;
                     }
                     .user1 .user3{
                            padding:0px;
                     }
                      .user3 .form-group{
                            padding:0px;
                            margin:0px;
                      }
                      .user3 .table-responsive  .table tr th,td{
                            font-size:10px;
                      }
                      .user3 .table-responsive  .table #display tr td{
                            padding:0px;
                      }
                      #i1{
                            width:20px;
                            height:20px;
                      }
                    
              }
       </style>
       <body style="background-image: url('images/img4.jpg');
                       background-size: 100% 100%; ">
             <?php
                     include("../header/header.php");
                     include("../header/menubar.php");
                     include("../savepages/search.php");
             ?>
              
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user1" style="padding:0px; margin:0px;">
                     
                     <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
                            
                     </div>         

                     <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 user3">
                        
                     
                     <form action="" method="POST" role="form">
                          
                            <div class="form-group">
                                   <input type="text" class="form-control" id="txtname" placeholder="Search">
                            </div>
                     </form>
                     
                            <div class="table-responsive">
                                   <table class="table table-hover table-bordered table-responsive" style="text-align: center">
                                          <thead>
                                                 <tr>
                                                        <th>No</th>
                                                        <th>Name</th>
                                                        <th>Subject-Name</th>
                                                        <th>Question-Set</th>
                                                        <th>Question's</th>
                                                        <th>T-Marks</th>
                                                        <th>Wrong-Ans</th>
                                                        <th>Right-Ans</th>
                                                        <th>Obtain-Marks</th>
                                                        <th>Rank</th>
                                                 </tr>
                                          </thead>
                                          <tbody id="display">
                                          <?php
                                          require("../dbcon.php");
                                                 $i=1;
                                                 $sql="select *from tblexamuser order by obtmarks desc";
                                                 $res=mysqli_query($link,$sql);
                                                 if(mysqli_num_rows($res)>0)
                                                 {
                                                        while($row=mysqli_fetch_array($res))
                                                        {
                                                               echo "<tr id='t1'>";
                                                              
                                                               echo "<td>".$i; "</td>";
                                                               echo "<td>".$row[0]; "</td>";
                                                               echo "<td>".$row[1]; "</td>"; 
                                                               echo "<td>".$row[2]; "</td>"; 
                                                               echo "<td>".$row[3]; "</td>"; 
                                                               echo "<td>".$row[4]; "</td>"; 
                                                               echo "<td>".$row[5]; "</td>"; 
                                                               echo "<td>".$row[6]; "</td>"; 
                                                               echo "<td>".$row[7]; "</td>"; 
       echo "<td>";
       if($row[7]==10)
       {?>        
       <img src="images/rank1.png" class="img-responsive" alt="Image" id="i1"><?php
       }
       else if($row[7]>=7 && $row[7]<10)
       {
              ?> <img src="images/rank2.png" class="img-responsive" alt="Image" id="i1">
              <?php
       }
       else if($row[7]>=5 && $row[7]<7)
       {
              ?>
              <img src="images/rank3.png" class="img-responsive" alt="Image" id="i1">
              <?php
       } 
       else if($row[7]>=1 && $row[7]<=5)
       {
              ?>
              <img src="images/pass2.png" class="img-responsive" alt="Image" id="i1">
              <?php
       }
       else 
       {
              ?>
              <img src="images/preview.png" class="img-responsive" alt="Image" id="i1">
              <?php
       }
       "</td>";
                                                               echo "</tr>";
                                                               $i=$i+1;
                                                        ?>
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
