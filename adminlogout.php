<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header('location:admin.php');
}
session_destroy();
$_SESSION['id']=NULL;
header('location: adminerp.php');
?>