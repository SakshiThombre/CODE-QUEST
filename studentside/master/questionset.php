<?php
       require("../dbcon.php");
       session_start();
       $subjectname=trim($_GET["subjects"]);
       $_SESSION["subjectname"]=trim($subjectname);
       
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

              <style>
                     .stdpage1{
                            width: 100%;
                            /* height: 510px; */
                     }
                     .user3{
                            top:30px;
                            left: 200px;
                     }
                     @media screen and (max-width:400px){
                            .user3{
                                   top:130px;
                                   left: 0px;
                            }
                     }
                    
              </style>
       </head>
       <body style="background-image: url('images/img4.jpg'); background-size: 100%   ;">
              
              <?php
                     include("../header/header.php");
                     include("../header/menubar.php");
                     include("../savepages/search.php");
                
                     
              ?>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 stdpage1">
                    
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                     
                    </div>
                    
                     <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 user3" >
                              
                         
                                 
                         <!-- <hr> -->
                           
                           <table class="table table-hover">
                            <!-- <thead>
                                   <tr>
                                          <th>Question-Set</th>
                                          <th>Level's</th>
                                   </tr>
                            </thead> -->
                            <tbody>
                                  <?php
                                          require("dbcon.php");
                                          $i=1;
                                          $sql="select *from tblquestionset where trim(subjects)='$subjectname'";
                                          $res=mysqli_query($link,$sql);
                                          if(mysqli_num_rows($res)>0)
                                          {
                                                 while($row=mysqli_fetch_array($res))
                                                 {
                                                        echo"<tr>";
                                                        // echo"<td>".$row[2]; "</td>";
                                                        ?>
                                                            <td id="btntd">
                                                               <a href="questionpaper.php?btndelete=&level=<?php echo $row[2];?>" type="button" class="btn btn-warning btn-block">
                                                                     <?php echo $row[2];?>
                                                               </a>
                                                        </td>
                                                        <?php
                                                        echo"</tr>";
                                                        $i++;
                                                 }
                                          }
                                  ?>
                            </tbody>
                           </table>
                           
                            
                     </div>
                     
                     
              </div>
              
            
              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>