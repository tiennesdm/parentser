<!doctype html>

<?php
include 'admininsert.php';
 $queries=new insertpost();
 $queries->setfile();
 $queries->inserttbstudentfather();
  header('location: admin.php');
 ?>
