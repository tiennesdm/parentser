<!Doctype html> 



<?php

$host="localhost";
$user="root";
$database="student_detail";
$con= mysqli_connect($host, $user, "", $database);

$uname = $_POST['uname'];
$email = mysqli_real_escape_string($con, $uname);
$password = mysqli_real_escape_string($con, $_POST['psd']);

// Query checks if the email and password are present in the database.
$query = "SELECT * FROM tbstudentfather WHERE username= '" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$num = mysqli_num_rows($result);


if($num==1){
   
    session_start();
     $row = mysqli_fetch_array($result);
    
$_SESSION['username']=$row['username'];
$_SESSION['name']=$row['name'];
$_SESSION['pk'] = $row['pk'];
$_SESSION['fathername']=$row['fathername'];
$_SESSION['rollno']=$row['rollno'];
     header('location:usererp.php');
    
}
else{
  
    
        echo "<script>alert('incorrect')</script>";  
        header('location:parenterp.php');
}
