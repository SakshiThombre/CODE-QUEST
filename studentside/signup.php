
<!DOCTYPE html>
<html lang="">
       <head>
              <meta charset="utf-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>signup</title>

              <!-- Bootstrap CSS -->
              <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
             
             <style>
                     div{
                            /* border: 1px solid black; */
                     }
                    .signup1{ 
                            width: 100%;
                            height: 613px;
                            background-image: url("images/img1.jpg");
                            background-size: 100% 100%;
                           
                    } 
                    .signup2{
                            padding: 25px;
                            top: 100px;
                            border-radius: 20px;
                            background-color: transparent;
                            box-shadow: 1px 1px 10px white;
                    }
                    @media screen and (max-width:400px){
                     .signup2{
                            left:0px;
                     }
                    }
                  
              </style>
       </head>
       <body>
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 signup1">
                     
                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            
                     </div>
                     
                     
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 signup2">
                            
                            <form action="savepages/signupsave.php" method="POST" role="form">
                                   
                                 <?php
                                          require("dbcon.php");
                                          $sql="select max(id) from tblsignup";
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


                                   <div class="form-group form1" style="display: none">
                                          <input type="text" class="form-control" id="txtid" name="txtid" value=" <?php echo $rowcount ?>" readonly>
                                   </div>
                                   
                                   <div class="form-group form1"  style="display: none">
                                          <input type="text" class="form-control" id="txtusertype" name="txtusertype" placeholder="" value="Student" readonly>
                                   </div>

                                   <div class="form-group form1">
                                          <input type="text" class="form-control" id="txtname" name="txtname" placeholder="Full-Name">
                                   </div>

                                   <div class="form-group form1">
                                          <input type="text" class="form-control" id="txtcollege" name="txtcollege" placeholder="School / College">
                                   </div>

                                   <div class="form-group form1">
                                          <input type="text" class="form-control" id="txtmobile" name="txtmobile" placeholder="Mobile-No">
                                   </div>

                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtemail" name="txtemail" placeholder="Email-ID">
                                   </div>

                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtpassword" name="txtpassword" placeholder="Password">
                                   </div>

                                   <div class="form-group">
                                          <input type="password" class="form-control" id="" name="" placeholder="Re-Password">
                                   </div>

                                   <button type="submit" name="btnsignup" class="btn btn-primary btn-block">Sign-Up</button>
                            </form>
                            
                    </div>
                    
              </div>
                     

              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
