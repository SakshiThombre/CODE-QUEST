
<!DOCTYPE html>
<html lang="">
       <head>
              <meta charset="utf-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>Signin</title>
              <link rel="icon" href="../images/logo.png" type="png/x-icon" />
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
                     body{
                            background-image:url("images/back2.jpg");
                            background-size:100% 100%;
                            repeat:no-repeat;
                     }
                    .signin1{
                            width: 100%;
                            height: 650px;
                            /* background-image: url("images/signinbackgr.jpg");
                            background-size: 100% 100%; */
                           
                    } 
                    #img1{
                     height:200px;
                     margin-left:50px;
                    }
                    .signin2{
                            padding: 25px;
                            top: 100px;
                            left: 400px;
                            border-radius: 20px;
                            background-color:transparent;
                            box-shadow: 2px 2px 10px white;
                    }
                    @media screen and (max-width:400px){
                     .signin2{
                            left: 0px;   
                     }
                     #img1{
                     height:150px;
                     margin-left:50px;
                    }
                    }
                  
              </style>
       </head>
       <body>
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 signin1">

                     
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 signin2">                     
                    <img src="images/banner (1).png" id="img1" class="img-responsive" alt="Image">

                            <form action="savepages/adminloginsave.php" method="POST" role="form">
                                  
                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtuserid" name="txtuserid" placeholder="User-ID">
                                   </div>                   

                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtpassword" name="txtpassword" placeholder="Password">
                                   </div>


                                   <button type="submit" name="btnadminlogin" class="btn btn-primary btn-block">Sign-In</button>
                            </form>
                            
                    </div>
                    
              </div>
                     

              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
