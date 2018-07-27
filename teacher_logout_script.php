<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header('location:teachererp.php');
}
session_destroy();
$_SESSION['id']=NULL;
header('location: teacher.php');
?>