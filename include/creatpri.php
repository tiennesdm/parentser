<?php
include 'include/connection.php';


if(!$con)
{
	die("connection failed");
	mysqli_connect_error();
}
//sql create table
$sql="CREATE TABLE shubham (
    ID int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    city varchar(255),
     address varchar(255),
    phone BIGINT(10),
	feedback TEXT (1000),
    PRIMARY KEY (ID)
);";
if(mysqli_query($con,$sql))
{
      

}

else{
	echo "error in query";
}
mysqli_close($con);

?>