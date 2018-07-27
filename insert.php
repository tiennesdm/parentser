<!doctype html>

<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "student_detail");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$feedback = mysqli_real_escape_string($link, $_REQUEST['feedback']);

 
// attempt insert query execution
$sql = "INSERT INTO feed (names,city ,address,phone,feedback) VALUES ('$name', '$city', '$address','$phone','$feedback')";
if(mysqli_query($link, $sql)){
    echo "<script>alert('we will contact you later')</script>";
    include 'parenterp.php';
  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);

?>