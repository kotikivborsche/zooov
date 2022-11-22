<?php
include 'includes/config.php';



$ration_name = $_POST['ration_name'];
$ration_weight = $_POST['ration_weight'];
$ration_age = $_POST['ration_age'];
$ration_phone = $_POST['ration_phone'];
$ration_question = $_POST['ration_question'];


$sql = "INSERT INTO ration_asks (name, phone, weight, age, message) VALUES (:name, :phone, :weight, :age, :message)";

$query = $pdo->prepare($sql);
$query->execute(['name' => $ration_name,'phone' => $ration_phone,'weight' => $ration_weight,'age' => $ration_age,'message' => $ration_question]);

header('Location: /zooov');
?>