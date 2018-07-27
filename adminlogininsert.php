<!Doctype html> 



<?php

$host="localhost";
$user="root";
$database="student_detail";
$con= mysqli_connect($host, $user, "", $database);

$email = $_POST['uname'];
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $_POST['psd']);

// Query checks if the email and password are present in the database.
$query = "SELECT * FROM tbadmin WHERE 	uname= '" . $email . "' AND upass ='" . $password . "'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$num = mysqli_num_rows($result);


if($num==1){
   
    session_start();
     $row = mysqli_fetch_array($result);
      $_SESSION['uname'] = $row['uname'];
 header('location: admin.php');
 
    
}
else{
  
    
        echo "<script>alert('incorrect')</script>";  
        include 'adminerp.php';
}

?>