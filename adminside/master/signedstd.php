
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
              thead th{
                     text-align: center;
              }
              @media screen and (max-width:400px){
                     .user1{
                            padding:0px;
                     }
                     .user1 .user3{
                            padding:0px;
                            margin:0px;
                     }
                     .user3{
                            border-radius: 0px;
                     }
                     .user3 .table-responsive  .table tr th,td{
                            font-size:10px;
                            padding:0px;
                      }
                      .user3 .table-responsive  .table #display tr td{
                            padding:1px 1px 0px 1px;
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
                     
                     <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                            
                     </div>         

                     <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 user3">
                           
                           
                           <form action="" method="POST" role="form">
       
                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtname" placeholder="Search">
                                   </div>
                           </form>
                           
                            <div class="table-responsive">
                                   <table class="table table-hover table-bordered table-responsive" style="text-align: center" id="">
                                          <thead>
                                                 <tr>
                                                        <th style="display: none;">Id</th>
                                                        <th>No</th>
                                                        <th>Name</th>
                                                        <th style="display: none;">College/School</th>
                                                        <th>Mobile</th>
                                                        <th>Email</th>
                                                        <th>Password</th>
                                                 </tr>
                                          </thead>
                                          <tbody id="display">
                                          <?php
                                          require("../dbcon.php");
                                                 $i=1;
                                                 $sql="select *from tblsignup";
                                                 $res=mysqli_query($link,$sql);
                                                 if(mysqli_num_rows($res)>0)
                                                 {
                                                        while($row=mysqli_fetch_array($res))
                                                        {
                                                               echo "<tr id='t1'>";
                                                               echo "<td style='display: none;'>".$row[0]; "</td>";
                                                               echo "<td>".$i; "</td>";
                                                               echo "<td>".$row[2]; "</td>"; 
                                                               echo "<td style='display: none;'>".$row[3]; "</td>"; 
                                                               echo "<td>".$row[4]; "</td>"; 
                                                               echo "<td>".$row[5]; "</td>"; 
                                                               echo "<td>".$row[6]; "</td>"; 
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
