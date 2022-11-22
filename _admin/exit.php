<?php
 
include 'includes/header.php';
 
session_destroy();
 
unset($_SESSION);
//echo "<script>self.location='http://localhost/zooov/_admin/auth.php';</script>"; 
header('Location: '.FOLDER.'/_admin');
?>
