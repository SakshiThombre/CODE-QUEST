
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
              .user2{
                     top: 100px;
                     left: 70px;
                     padding: 20px;
                     background-color: white;
                     border-radius: 20px;
                     box-shadow: 1px 1px 10px black;
              }
              @media screen and (max-width:400px){
                     .user2{
                            left: 0px; 
                     }
              }
       </style>
       <body style="background-image: url('images/img4.jpg');
                       background-size: 100% 100%; ">
             <?php
                     include("../header/header.php");
                     include("../header/menubar.php");
             ?>
              
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user1">
            
                     
                     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            
                     </div>
                      

                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 user2">
                            
                            <form action="../savepages/quesetsave.php" method="POST" role="form">
                                   <legend style="text-align: center;">Create Question-Set</legend>
                                   <br>

                                   <?php
                                          require("../dbcon.php");
                                          $sql="select max(id) from tblquestionset";
                                          $res=mysqli_query($link,$sql);
                                          $rowcount=0;
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

                                 
                                   <div class="form-group" style="display: none">
                                          <input type="text" class="form-control" id="txtid" name="txtid" value=" <?php echo $rowcount ?>" readonly>
                                   </div>
                                    
                                   <?php
                                         $subject=$_GET["subjects"];
                                   ?>
                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtsubjects" name="txtsubjects" value=" <?php echo $subject ?>" readonly require>
                                       
                                   </div>

                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtquestionset" name="txtquestionset" placeholder="Level" autocomplete="off" require>
                                       
                                   </div>
                            
                                   <button type="submit" name="btnsaveque" class="btn btn-primary btn-block">Submit</button>
                            </form>
                            
                     </div> 
             </div>
             
              
            
              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
