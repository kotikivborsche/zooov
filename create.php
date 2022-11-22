<?php
include 'includes/config.php';
include 'functions.php';

                                


$footer_name = $_POST['footer_name'];
$footer_email = $_POST['footer_email'];
$footer_question = $_POST['footer_question'];

$sql = "INSERT INTO clients (name, email, question) VALUES (:name, :email, :question)";

$query = $pdo->prepare($sql);
$query->execute(['name' => $footer_name,'email' => $footer_email,'question' => $footer_question]);



header('Location: /zooov');
?>