
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
                     /* td:hover{
                          border:3px solid #fff;
                     } */
              }
       </style>
       <body style="background-image: url('images/img4.jpg');
                       background-size: 100% 100%; ">
             <?php
                     include("../header/header.php");
                     include("../header/menubar.php");
                     $_SESSION["subject"]=trim($_GET["subjects"]);
                     $subject=$_SESSION["subject"];
                     
             ?>
              
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user1">
                     
                     <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            
                     </div>         

                     <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 user3">
                            
                            <form action="" method="POST" role="form">
                                   <div class="form-group">
                                          <input type="text" class="form-control" id="" placeholder="Input field" readonly value="<?php echo $subject; ?>">
                                   </div>
                            </form>
                            
                            <!-- <div class="table-responsive"> -->
                                   <table class="table table-hover table-bordered " style="text-align: center">
                                          <thead>
                                                 <tr>
                                                        <th style="display: none;">Id</th>
                                                        <th style="display: none;">Subject</th>
                                                        <th>Level's</th>
                                                        <th>Add Question</th>
                                                        <th>Delete</th>
                                                 </tr>
                                          </thead>
                                          <tbody>
                                          <?php
                                                 require("../dbcon.php");
                                                 $sql="select *from tblquestionset where subjects='$subject'";
                                                 $res=mysqli_query($link,$sql);
                                                 if(mysqli_num_rows($res)>0)
                                                 {
                                                        while($row=mysqli_fetch_array($res))
                                                        {
                                                        echo "<tr id='t1'>";
                                                        echo "<td style='display: none;'>".$row[0]; "</td>";
                                                        echo "<td style='display: none;'>".$row[1]; "</td>";
                                                        echo "<td>".$row[2]; "</td>";
                                                        // $subjectid=$row[0];
                                                        // $subjectname=$row[1];
                                                        // $set=$row[2];
                                                 ?>
                                                        <td id="btntd">
                                                        <a href="../savepages/subjectidsave.php?btndelete=&id=<?php echo $row["id"]; ?>&subject=<?php echo $row["subjects"]; ?> &set=<?php echo $row["questionset"]; ?>" type="button" class="btn btn-success">
                                                               <span class="glyphicon glyphicon-plus glyphicon1" aria-hidden="true"></span>
                                                        </a>   
                                                        </td>

                                                        <td>
                                                        <a href="../savepages/quesetsave.php?btndelete=delete&id=<?php echo $row[0];?>" type="button" class="btn btn-danger" >
                                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                        </a>
                                                
                                                        </td>
                                                        </tr>
                                                        <?php

                                                        }
                                                        
                                                 }
                                          ?>
                                          </tbody>
                                   </table>
                            <!-- </div> -->
                            
                     </div>
                     
                   
             </div>
          
              
            
              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
