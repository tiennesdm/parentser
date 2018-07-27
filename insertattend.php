<!doctype html>

<?php
include 'admininsert.php';
 $queries=new insertpost();
 $queries->setfile();
 $queries->inserttbstudentform();
 
  header('location: admin.php');
 ?>
