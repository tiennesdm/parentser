<!doctype html>

<?php
include 'admininsert.php';
 $queries=new insertpost();
 $queries->setfile();
 $queries->insertteacher();
  header('location: admin.php');
 ?>
