<!Doctype html> 



<?php

$host="localhost";
$user="root";
$database="student_detail";
$con= mysqli_connect($host, $user, "", $database);

$uname = $_POST['uname'];
$email = mysqli_real_escape_string($con, $uname);
$password = mysqli_real_escape_string($con, $_POST['pass']);

// Query checks if the email and password are present in the database.
$query = "SELECT * FROM teacher WHERE teacher_name= '" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$num = mysqli_num_rows($result);


if($num==1){
   
    session_start();
     $row = mysqli_fetch_array($result);
    
$_SESSION['teacher_name']=$row['teacher_name'];

$_SESSION['id'] = $row['id'];
$_SESSION['department']=$row['department'];
     header('location:teachererp.php');
    
}
else{
  
    
        echo "<script>alert('incorrect')</script>";  
        header('location:teacher.php');
}
