<?php

session_start();
if (!isset($_SESSION["studentname"])) {
       echo "<script>open('../signin.php','_self')</script>";
}

if (isset($_GET["btndelete"])) {
       $level = $_GET["level"];
       $_SESSION["level"] = $level;
}
// if(!isset($_SESSION["id"]) )
// {
//     echo"<script>open('../signin.php','_self')</script>";   
// }

if (!isset($_SESSION["subjectname"])) {
       echo "<script>open('../signin.php','_self')</script>";
}

if (!isset($_SESSION["level"])) {
       echo "<script>open('../signin.php','_self')</script>";
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
              <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

       <style>
              .stdpage1 {
                     width: 100%;
                     height: 510px;

              }

              .user3 {
                     top: 50px;
                     padding: 20px;
                     color: white;
                     background-color: rgba(235, 235, 141, 0.45);
                     border-radius: 20px;
                     box-shadow: 2px 2px 2px black;

              }

              form #question {
                     font-weight: bold;
              }

              ::-webkit-scrollbar {
                     display: none;
              }

              #btnsub {
                     font-weight: bold;
                     background-color: #D3D3D3;
                     color: black;
              }

              #btnsub:hover {
                     background-color: gray;
                     color: white;
              }

              #exit {
                     padding-top: 15px;
                     padding-bottom: 10px;
              }

              #d1 {
                     visibility: visible;
              }

              #s1 {
                     visibility: hidden;
              }
              
              .matched {
                     background-color: red;
                     }
                     .second-matched {
                     background-color: green;
                     }

              /* input[type="radio"]:checked+label {
                     background-color: red;
              } */

              @media screen and (max-width:400px) {
                     .m1 {
                            margin-bottom: 10px;
                            text-align: center;
                     }

                     #d1 {
                            visibility: hidden;
                     }

                     #s1 {
                            visibility: visible;
                            padding-left: 25px;
                     }

                     #exit {
                            padding: 7px;
                     }

                     .footrtbtn {
                            display: flex;
                     }

                     .m1 a {
                            padding: 0px;
                     }

                     #s2,
                     #s3 {
                            justify-content: center;
                            align-items: center;
                     }
              }
       </style>
       
       <script>
              
              function audioon() {
                     const radios = document.getElementsByName('option');
                     let select = null;

                     for (const radio of radios) {
                     if (radio.checked) {
                            select = radio.value;
                            selected=radio;
                            break;
                     }
                     }
                     let audio = new Audio('../audio/beep.mp3'); // Replace with your audio file path
                     audio.play();
                     checkans();
                     disableOthers(selected);
              }
              document.getElementById("myButton").addEventListener("click", function() {
                      alert("Button Clicked using addEventListener!");
              });


              function checkans(){

                     const radios = document.getElementsByName('option');
                     let select = null;

                     for (const radio of radios) {
                     if (radio.checked) {
                            select = radio.value;
                            selected=radio;
                            break;
                     }
                     }
                     var correct =document.getElementById("correctans").value;
                     // alert("correct :"+correct);

                     // alert("selected: " + select);

                     if (select === correct) {
                            
                            let audio = new Audio('../audio/correctans.mp3')
                            audio.play();
                            // alert("Correct Answer!")
                     } else {
                            var audio = new Audio('../audio/wrongans.mp3'); 
                            audio.play();
                            // alert("Wrong answer!");
                            // alert("Correct Answer :"+correct);
                     }
              }
             
              function checkans1(){

                     const radios = document.getElementsByName('option');
                     let select = null;

                     for (const radio of radios) {
                     if (radio.checked) {
                            select = radio.value;
                            selected=radio;
                            break;
                     }
                     }
                     var correct =document.getElementById("correctans").value;
                     // alert("correct :"+correct);

                     // alert("selected: " + select);

                     if (select !=correct) {
                             alert("Correct Answer : "+correct);
                     } 
}    


              function disableOthers(selected) {
                     document.querySelectorAll('input[name="option"]').forEach((radio) => {
                     if (radio !== selected) {
                            radio.disabled = true;
                     }
                     });
              }
       </script>
</head>

<body style="background-image: url('images/img4.jpg'); background-size: 100% 100%;">

       <?php
       require("dbcon.php");
       include("../header/header.php");
       $subjectname = $_SESSION["subjectname"];
       $level = $_SESSION["level"];

       ?>
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 stdpage1">


              <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">

              </div>


              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 user3">
                     <p>Subject:-<b> <?php echo $subjectname ?> Language</b></p>
                     <p>Marks :- <b>50</b></p>

                     <?php
                     $sql = "select max(questionno) from tbltemp where  trim(questionset)='$level' and trim(subject)='$subjectname'";
                     $res = mysqli_query($link, $sql);
                     if (mysqli_num_rows($res) > 0) {
                            if ($row = mysqli_fetch_array($res)) {
                                   $count = $row[0] + 1;
                            }
                     } else {
                            $count = 1;
                     }

                     if (isset($_POST["btnpre"])) {
                            $count = $count - 1;
                     }
                     ?>

                     <form action="../savepages/questionpapersave.php" method="POST" role="form" onsubmit="checkans1()" >
                            <?php

                            $sql = "select *from tbladdquestion where trim(subject)='$subjectname' and trim(questionset)='$level' and trim(questionNo)='$count'";
                            $res = mysqli_query($link, $sql);
                            if (mysqli_num_rows($res) > 0) {
                                   $_SESSION["count"] = $count;
                                   ?>
                                   <script>
                                          $(function () {
                                                 $("#btnshowmark").hide();
                                          })
                                   </script>
                                   <?php
                                   if ($row = mysqli_fetch_array($res)) {
                                          $answer=$row[9];
                                          ?>
                                          <div class="form-group">
                                                 <label for="">Quesiton :- <?php echo $count; ?></label>

                                                 <textarea name="question" id="question" class="form-control"
                                                        rows="3"><?php echo $row[4]; ?></textarea>
                                          </div>

                                          <div id="ans1">
                                                 <input type="radio" name="option" id="A" placeholder="Input field"
                                                        class="ans11" value="<?php echo $row[5]; ?>" onclick="audioon()">
                                                 <label for=""> A ) <?php echo $row[5]; ?></label>
                                          </div>

                                          <div id="ans1">
                                                 <input type="radio" name="option" id="A" placeholder="Input field" class="ans12"
                                                        value="<?php echo $row[6]; ?>" onclick="audioon()">
                                                 <label for=""> B ) <?php echo $row[6]; ?></label>
                                          </div>

                                          <div id="ans1">
                                                 <input type="radio" name="option" id="A" placeholder="Input field" class="ans13"
                                                        value="<?php echo $row[7]; ?>" onclick="audioon()" >
                                                 <label for=""> C ) <?php echo $row[7]; ?></label>
                                          </div>

                                          <div id="ans1">
                                                 <input type="radio" name="option" id="A" placeholder="Input field" class="ans14"
                                                        value="<?php echo $row[8]; ?>" onclick="audioon()">
                                                 <label for=""> D ) <?php echo $row[8]; ?></label>
                                          </div>


                                          <div class="form-group" style="display: none" id="ans1">
                                                 <input type="text" class="form-control ans15" name="correctans" id="correctans"
                                                        value="<?php echo $row[9]; ?>">
                                          </div>
                                          <br>

                                          <div class="col-xs-7 col-sm-7 col-md-3 col-lg-3">
                                                 <button type="submit" name="btnsub" id="btnsub"
                                                        class="btn btn-default btn-block" >Submit Question</button>
                                          </div>
                                          <br>

                                          <hr>
                                   <?php


                                   }
                            } else {
                                   echo "<h1>No Question Yet</h1>";
                                   ?>
                                   <script>
                                          $(function () {
                                                 $("#btnnext").hide();
                                                 $("#btnpre").hide();
                                          })
                                   </script><?php
                            }
                            ?>
                            <!-- <style>
                                   .hovdiv{
                                          display: none;
                                   } 
                                   .btnnext:hover .hovdiv{
                                          display: block;
                                          color: red;
                                   }
                            </style> -->

                            <div class="footerbtn">
                                   <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 m1">
                                          <a href="previousquestion.php?count=<?php echo $count ?>" type="button"
                                                 class="btn btn-success btn-block">
                                                 <button type="button" class="btn btn-success btn-block">
                                                        <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"
                                                               id="s2"></span>

                                                        <b id="d1">Previous</b>
                                                 </button>
                                          </a>

                                          </td>
                                   </div>

                                   <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 m1">
                                          <button type="button" class="btn btn-danger btn-block " id="exit"
                                                 onclick="destroy()">
                                                 <span class="glyphicon glyphicon-remove" aria-hidden="true"
                                                        id="s1"></span>
                                                 <b id="d1">Exit</b>
                                          </button>
                                   </div>

                                   <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 m1">
                                          <a href="nextquestion.php?count=<?php echo $count ?>" type="button"
                                                 class="btn btn-primary btn-block">
                                                 <button type="button" class="btn btn-primary btn-block">
                                                        <b id="d1">Next</b>
                                                        <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"
                                                               id="s3"></span>
                                                 </button>
                                          </a>
                                   </div>


                            </div>
                            <script>

                                   function show() {
                                          open("showresult.php", "_self");

                                   }
                                   function destroy() {
                                          open("../savepages/destroyresult.php", "_self");
                                   }
                            </script>



                     </form>

                     <div class="col-xs-7 col-sm-7 col-md-4 col-lg-4">
                            <button type="submit" name="btnshowmark" onclick="show()" id="btnshowmark"
                                   class="btn btn-success btn-block"> Check-Result </button>
                     </div>


              </div>
             
             

              <script>
    $(document).ready(function(){
        let selectedAnswer = "<?php echo $selectans; ?>"; // Previously selected answer
        let correctAnswer = "<?php echo $correctans; ?>"; // Correct answer

        $("input[type='radio']").each(function(){
            let value = $(this).val();
             
            if(value.trim() === selectedAnswer.trim()){ 
                $(this).prop("checked", true);
                $(this).next("label").addClass("matched"); // Selected answer in red
            }
            
            if(value.trim() === correctAnswer.trim()){ 
                $(this).next("label").addClass("second-matched"); // Correct answer in green
            }
        });

        // Disable all radio buttons after selection
        $("input[type='radio']").prop("disabled", true);
    });

    
    </script>
   

                     



       </div>


       <!-- jQuery -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <!-- Bootstrap JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>