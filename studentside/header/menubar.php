<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
       .menubar1{
              padding: 10px 0px;
              margin: 5px 0px 0px  0px;
              text-align: left;    
              
       }
      .menubar1 a{
              text-decoration: none;
              padding: 10px;
              margin-left: 20px;
              color:white;
              text-shadow: 2px 2px 2px #333;
              font-weight: bold;
              font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
       }
       @media screen and (max-width:400px){
              .menubar1{
                     padding-left:20px;
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
   
      
              <a href="../master/subjects.php">SUBJECTS</a>
              
       

              <a onclick="logout()">
                     
                     <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                     
              </a>
</div>
