<!doctype html>
<?php
  $link = mysqli_connect("localhost", "root", "", "student_detail");
$name= mysqli_real_escape_string($link,$_REQUEST['uname']);
$course= mysqli_real_escape_string($link,$_REQUEST['course']);
$branch= mysqli_real_escape_string($link,$_REQUEST['branch']);
$year= mysqli_real_escape_string($link,$_REQUEST['year']);
$sem= mysqli_real_escape_string($link,$_REQUEST['sem']);
$rollno= mysqli_real_escape_string($link,$_REQUEST['rollno']);
$testno= mysqli_real_escape_string($link,$_REQUEST['testno']);
$subject= mysqli_real_escape_string($link,$_REQUEST['subject']);
$reappear= mysqli_real_escape_string($link,$_REQUEST['reappear']);

          
          $sql = "INSERT INTO  tbstudentsheet(names,course,branch,year,sem,rollno,testno,subject,reappear)VALUES('$name','$course','$branch','$year','$sem','$rollno','$testno','$subject','$reappear')";    
   if(mysqli_query($link, $sql)){
    echo "<script>alert('successfully inserted')</script>";
        header('location: admin.php');
  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);   


?>