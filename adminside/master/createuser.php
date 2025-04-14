<?php
       require("../dbcon.php");
     
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

              <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
              <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
              <!--[if lt IE 9]>
                     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
                     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
              <![endif]-->

              <style>
                     /* div{
                            border: 1px solid black;
                     } */
                     .createuser1{
                            height: auto;
                            top: 30px;
                     }
                     .createuser2,.createuser3{
                            top: 50px;
                          
                            padding: 20px;
                            background-color: white;
                            border-radius: 20px;
                            box-shadow: 1px 1px 10px black;
                      }
                      .createuser2{
                            margin: 0px 30px 0px 30px;
                      }
                      @media screen and (max-width: 400px) {
                            .createuser1{
                               margin-left:-30px;      
                            }
                            .createuser3{
                                   margin: 40px 30px 0px 30px;
                            }

                      }
              </style>
       </head>
       <body style="background-image: url('images/img4.jpg');
       background-size: 100% 100%; ">
              <?php
                     include("../header/header.php");
                     include("../header/menubar.php");
              ?>

              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser1">
                     
                     <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 createuser2">
                            
                            <form action="../savepages/createusersave.php" method="POST" role="form">
                                   <legend>Create User</legend>
                                 
                                   <?php
                                          require("../dbcon.php");
                                          $sql="select max(id) from tblstaff";
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

                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtusertype" name="txtusertype" placeholder="User" list="clist" autocomplete="off" require>
                                          <datalist id="clist">
                                          <?php
                                                 $sql="select usertype from tblusertype order by usertype";
                                                 $res=mysqli_query($link,$sql);
                                                 
                                                 if(mysqli_num_rows($res)>0)
                                                 {
                                                        while($row=mysqli_fetch_array($res))
                                                        {
                                                               ?>
                                                              <option value="<?php echo $row[0]; ?>"> <?php echo $row[0]; ?> </option>
                                                              <?php
                                                        }
                                                 }
                                          ?>
                                          
                                          </datalist>
                                   </div>
                            
                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtstaffname" name="txtstaffname" placeholder="Full-Name" autocomplete="off" require>
                                   </div>

                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtmobile" name="txtmobile" placeholder="Mobile-NO" autocomplete="off" require>
                                   </div>

                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtpass" name="txtpass" placeholder="Password" autocomplete="off" require>
                                   </div>

                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtemail" name="txtemail" placeholder="E-mail" autocomplete="off" require>
                                   </div>

                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtcity" name="txtcity" placeholder="City" autocomplete="off" require>
                                   </div>
                            
                                   <button type="submit" name="btncreateusersave" class="btn btn-primary btn-block">Submit</button>
                            </form>
                            
                     </div>
                     
                     
                
                     
                     <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 createuser3">
                            
                            <div class="table-responsive">
                                   <table class="table table-hover table-bordered">
                                          <thead>
                                                 <tr>
                                                        <th>Type</th>
                                                        <th>Staffname</th>
                                                        <th>Mobile</th>
                                                        <th>Password</th>
                                                        <th>Email</th>
                                                        <th>City</th>
                                                        <th>Option</th>
                                                 </tr>
                                          </thead>
                                          <tbody>
                                                <?php
                                                 $sql="select *from tblstaff";
                                                 $res=mysqli_query($link,$sql);
                                                 if(mysqli_num_rows($res)>0)
                                                 {
                                                        while($row=mysqli_fetch_array($res))
                                                        {
                                                               echo"<tr>";
                                                               echo"<td>".$row["usertype"]; "</td>";
                                                               echo"<td>".$row["staffname"]; "</td>";
                                                               echo"<td>".$row["mobile"]; "</td>";
                                                               echo"<td>".$row["password"]; "</td>";
                                                               echo"<td>".$row["email"]; "</td>";
                                                               echo"<td>".$row["city"]; "</td>";
                                                               ?>
                                                               <td id="btntd">
                                                        <a href="../savepages/createusersave.php?btndelete=delete&id=<?php echo $row["id"]; ?>" type="button" class="btn btn-danger">
                                                               <span class="glyphicon glyphicon-trash glyphicon1" aria-hidden="true"></span>
                                                        </a>
              
                                                        </td>
                                                               <?php

                                                               echo"</tr>";
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
