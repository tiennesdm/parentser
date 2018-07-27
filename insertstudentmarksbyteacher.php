<!doctype html>

<?php
include 'admininsert.php';
 $queries=new insertpost();
 $queries->setfile();
 $queries->inserttbstudentmarks();
 
  header('location: teachererp.php');
 ?>
