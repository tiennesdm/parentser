
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "","shubham");

session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['parent_email'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query("select parent_email from login where parent_email='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['parent_email'];
if(!isset($login_session)){
    mysqli_close($connection); // Closing Connection
header('Location: parenterp.php'); // Redirecting To Home Page
}
?>