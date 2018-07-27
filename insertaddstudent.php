<!doctype html>

<?php
include 'admininsert.php';
 $queries=new insertpost();
 $queries->setfile();
 $queries->inserttbstudent();
  header('location: admin.php');
 ?>
