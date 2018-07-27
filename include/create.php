<?php
#include 'include/connection.php';






if(!$con)
{
	die("connection failed");
	mysqli_connect_error();
}
//sql create table
$sql="INSERT INTO shubham(Name, city, phone, feeb)
VALUES ('Cardinal', 'Tom B. Erichsen', 9068562376, 'this is my life you cannt enter');";
if(mysqli_query($con,$sql))
{
	echo "table sucessfully created";
}
else{
	echo "error in query";
}
mysqli_close($con);

?>