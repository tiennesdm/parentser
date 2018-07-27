<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: usererp.php');
}
session_destroy();
$_SESSION['pk']=NULL;
header('location: parenterp.php');
?>