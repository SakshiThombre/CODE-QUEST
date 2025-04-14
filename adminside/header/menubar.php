<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
       .menubar1{
              padding: 10px 0px;
              margin: 0px 0px;
              text-align: left;
              top: 20px;
            display:flex;
       }
      .menubar1 a{
              text-decoration: none;
              padding: 10px;
              color: white;
              font-weight: bold;
              font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
       }
       #g1{
              color:white;
              font-weight:bold;
              visibility:hidden;
       }
       @media screen and (max-width: 400px) {
            #g1{
              visibility:visible;
            }
            .menubar2{
              overflow:scroll;
              display:flex;
              margin-top:-7px;
            }
            .menubar2::-webkit-scrollbar{
                            display: none;
            }
            .menubar1{
              padding:0px;
              background-color:white;
            }
            .menubar1 {
               display: flex;
               align-items: center;
               justify-content: center;
            }
            .menubar2 a{
              font-size:10px;
              color:black;
            }
            .menubar2 a:hover{
               background-color:#266CA9;
               color:white;
               font-size:12px;
            }
            .menubar1:hover{
              padding:3px 3px;
            }
            #i1{
              color:black;
              padding-top:10px;
            }

       }
</style>

<script>          
       function logout(){
              ans=confirm("Do you want logout...")
              if(ans)
              {
                     open("../savepages/logout.php","_self"); 
              }
              else
              {
                     alert("You click cancel...");
              }
       }
</script>   


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 menubar1">
                              
            <div class="menubar2">
              <a href="../master/user.php">User</a>
              
              <a href="../master/createuser.php">Create-User</a>

              <a href="../master/createsubjects.php">Create-Sub</a>

              <!-- <a href="../master/displayqueset.php">Level's</a> -->

              <a href="../master/signedstd.php">Sign-up</a>

              <a href="../master/examuser.php">Exam-user</a>
              </div>
              <a onclick="logout()" style="margin-top:-7px";>
                     
                     <span class="glyphicon glyphicon-off" aria-hidden="true" id="i1"></span>
                     
              </a>
</div>
