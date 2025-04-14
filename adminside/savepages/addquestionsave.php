<?php
       require("dbcon.php");
       session_start();
       $subjectid=trim($_SESSION["id"]);
       $subjectname=trim($_SESSION["subjectname"]);
       $level=trim($_SESSION["level"]);
       if(isset($_POST["btnquestionsave"]))
       {
              $questionNo=trim($_POST["txtquestionNo"]);
              $questions=trim($_POST["txtquestions"]);
              $option1=trim($_POST["txtoption1"]);
              $option2=trim($_POST["txtoption2"]);
              $option3=trim($_POST["txtoption3"]);
              $option4=trim($_POST["txtoption4"]);
              $answer=trim($_POST["txtanswer"]);

              $sql="select * from tbladdquestion where trim(id)='$subjectid' and trim(subject)='$subjectname' and trim(questionset)='$level' and trim(questionNo)='$questionNo'";
              $res=mysqli_query($link,$sql);
              if(mysqli_num_rows($res)>0)
              {
                     $sql="delete from tbladdquestion where trim(id)='$subjectid' and trim(subject)='$subjectname' and trim(questionset)='$level' and trim(questionNo)='$questionNo'";
                     if(mysqli_query($link,$sql))
                     {
                            echo "<script>alert('Question is updated....')</script>";
                            echo "<script>open('../master/addquestion.php','_self')</script>";
                     }
              }

              $sql="insert into tbladdquestion values('$subjectid','$subjectname','$level','$questionNo','$questions','$option1','$option2','$option3','$option4','$answer')";
              if(mysqli_query($link,$sql))
              {
                     echo "<script>alert('Question is Inserted....')</script>";
                     echo"<script>open('../master/addquestion.php','_self')</script>";
              }
              mysqli_close($link);
       }
       else if(isset($_GET["btndelete"]))
       {
              $questionNo=$_GET["questionNo"];
              $sql="delete from tbladdquestion where trim(id)='$subjectid' and trim(subject)='$subjectname' and trim(questionset)='$level' and trim(questionNo)='$questionNo'";
              if(mysqli_query($link,$sql))
              {
                     echo "<script>alert('Recrod is Deleted')</script>";
                     echo"<script>open('../master/addquestion.php','_self')</script>";          
              }
       }
?>