
<!DOCTYPE html>
<html lang="">
       <head>
              <meta charset="utf-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>Signin</title>

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
                    .signin1{
                            width: 100%;
                            height: 613px;
                            background-image: url("images/img2.jpg");
                            background-size: 100% 100%;
                           
                    } 
                    .signin2{
                            padding: 25px;
                            top: 190px;
                            left: 130px;
                            border-radius: 20px;
                            background-color: transparent;
                            box-shadow: 1px 1px 10px white;
                    }
                    @media screen and (max-width:400px){
                     .signin2{
                            left:0px;
                     }
                    }
                  
              </style>
       </head>
       <body>
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 signin1">
                     
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 signin2">
                            
                            <form action="savepages/signinsave.php" method="POST" role="form">
                                  
                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtstudentid" name="txtstudentid" placeholder="Mobile-NO">
                                   </div>                   

                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtstudentpass" name="txtstudentpass" placeholder="Password">
                                   </div>


                                   <button type="submit" name="btnstudentlogin" class="btn btn-primary btn-block">Sign-In</button>
                            </form>
                            
                    </div>
                    
              </div>
                     

              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
