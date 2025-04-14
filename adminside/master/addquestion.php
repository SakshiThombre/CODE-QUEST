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
       <script>
                     $(function(){
                            $("#tbldata").on("click","tr",function(event){
                            var values=[];
                            var count=0;
                            $(this).find("td").each(function(){
                                   values[count]=$(this).text();
                                   count++;
                            });
                            $("#txtquestionNo").val(values[0]);  
                            $("#txtquestions").val(values[1]);
                            $("#txtoption1").val(values[2]);
                            $("#txtoption2").val(values[3]);
                            $("#txtoption3").val(values[4]);
                            $("#txtoption4").val(values[5]);
                            $("#txtanswer").val(values[6]);
                           
                         });
                     });

       </script>
       <style>
              /* div{
                     border: 1px solid black;
              } */
              .user1{
                     height: 500px;
                     top: 50px;
                     
              }
              .user3{
                     margin: 0px 0px;
                     padding: 20px;
                     background-color: white;
                     border-radius: 20px;
                     box-shadow: 1px 1px 10px black;
              }
              .user4{
                     left: 100px;
                     margin: 20px 0px 20px 0px;
                     padding: 20px;
                     background-color: white;
                     border-radius: 20px;
                     box-shadow: 1px 1px 10px black;
              }
              @media screen and (max-width:400px){
                     .user4{
                         margin-left:-100px;
                     }
                     .user3{
                            margin-top:50px;
                     }
              }
       </style>
       <body style="background-image: url('images/img4.jpg');
                       background-size: 100% 100%; ">
             <?php
                    
                     include("../header/header.php");
                     include("../header/menubar.php");
                     $subjectid=trim( $_SESSION["id"]);
                     $subjectname=trim($_SESSION["subject"]);
                     $level=trim($_SESSION["level"]);
                  
             ?>
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user1"   >
                
                  
                  <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                     
                  </div>
                  <?php 
                     require("../dbcon.php");
                     $sql="select max(questionNo) from tbladdquestion where id='$subjectid' and trim(subject)='$subjectname' and trim(questionset)='$level'";
                     $res=mysqli_query($link,$sql); 
                     if(mysqli_num_rows($res)>0)
                     {
                            if($row=mysqli_fetch_array($res))
                            {      
                                   $rowcount=$row[0]+1; 
                            }
                     }
                     else
                     {
                            $rowcount=1;
                     }

                     ?>

                  <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 user3"  >
                         <?php if($rowcount<=10){ ?>
                        <form action="../savepages/addquestionsave.php" method="POST" role="form">
                            <legend style="text-align: center">Add Questions</legend>
                           
                           <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin: 0px 0px; padding: 0px 10px">
                                  
                                   <div class="form-group">
                                          <label>Subject-Id</label>
                                          <input type="text" class="form-control" id="txtsubjectid" name="txtsubjectid" value="<?php echo $subjectid; ?>" readonly require>
                                   </div>

                                   <div class="form-group">
                                          <label>Subject-Name</label>
                                          <input type="text" class="form-control" id="txtsubjectname" name="txtsubjectname" value="<?php echo $subjectname; ?>" readonly require>
                                   </div>
                           </div>

                           <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin: 0px 0px; padding: 0px 10px">

                                   <div class="form-group">
                                          <label>Level</label>
                                          <input type="text" class="form-control" id="txtquestionset" name="txtquestionset" value="<?php echo $level; ?> " readonly require>
                                   </div>
                                 
                                  
                                   <div class="form-group">
                                          <label>Question-No</label>
                                          <input type="text" class="form-control" id="txtquestionNo" name="txtquestionNo" value="<?php echo $rowcount; ?> " readonly require>
                                   </div>
                            </div>
                            <div class="form-group">
                                 <textarea name="txtquestions" id="txtquestions" class="form-control" rows="4" required="required"></textarea> 
                            </div>
                            
                            
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                   
                                   <div class="form-group">
                                          <label>A</label>
                                          <input type="text" class="form-control" id="txtoption1" name="txtoption1" autocomplete="off" require>
                                   </div>

                                   <div class="form-group">
                                          <label>C</label>
                                          <input type="text" class="form-control" id="txtoption3" name="txtoption3" autocomplete="off" require>
                                   </div>
                                   
                            </div>
                            
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                   
                                   <div class="form-group">
                                          <label>B</label>
                                          <input type="text" class="form-control" id="txtoption2" name="txtoption2" autocomplete="off" require>
                                   </div>

                                   <div class="form-group">
                                          <label>D</label>
                                          <input type="text" class="form-control" id="txtoption4" name="txtoption4" autocomplete="off" require>
                                   </div>
                                   
                            </div>
                            
                            <div class="form-group">
                                   <label>Answer</label>
                                   <input type="text" class="form-control" id="txtanswer" name="txtanswer" require autocomplete="off">
                            </div>
                          <?php } else{
                            echo "<script>alert('You can add only 10 questions')</script>";
                            echo "<script>open('destroy.php','_self')</script>";
                          } ?> 
                            
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <button type="submit" name="btnquestionsave" class="btn btn-primary btn-block">Submit</button> 
                            </div>

                            
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                   
                                   <button type="button" onclick="destroy()" class="btn btn-danger btn-block">Exit</button>
                                   
                            </div>
                            <script>
                                   function destroy()
                                   {
                                          open("destroy.php","_self");
                                   }
                            </script>
                            
                           
                           
                      </form>  
                      
                  </div>
                  

                  <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 user4">
                       
                      
                      <div class="table-responsive">
                            <table class="table table-hover">
                            <thead>
                                   <tr>
                                          <th style="width: 5%">NO</th>
                                          <th style="width: 40%">Question</th>
                                          <th>A</th>
                                          <th>B</th>
                                          <th>C</th>
                                          <th>D</th>
                                          <th style="width: 15%">Answer</th>
                                          <th>Delete</th>
                                   </tr>
                            </thead>
                            <tbody id="tbldata">
                                 <?php
                                 require("../dbcon.php");
                                  $sql="select questionNo,questions,option1,option2,option3,option4,answer from tbladdquestion where id='$subjectid' and trim(subject)='$subjectname' and trim(questionset)='$level'";
                                  $res=mysqli_query($link,$sql);
                                  if(mysqli_num_rows($res)>0)
                                  {
                                          while($row=mysqli_fetch_array($res))
                                          {
                                                 echo "<tr id='t1'>";
                                                 echo "<td>".$row[0]; "</td>";
                                                 echo "<td>".$row[1]; "</td>";
                                                 echo "<td>".$row[2]; "</td>";
                                                 echo "<td>".$row[3]; "</td>";
                                                 echo "<td>".$row[4]; "</td>";
                                                 echo "<td>".$row[5]; "</td>";
                                                 echo "<td style='font-weight: bold'>".$row[6];"</td>";
                                                 ?>
                                                 <td>
                                                 <a href="../savepages/addquestionsave.php?btndelete=delete&questionNo=<?php echo $row[0];?>" type="button" class="btn btn-danger" >
                                                 <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                 </a>
                                                 </td>
                                                 <?php
                                                 echo "</tr>";
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
