<?php
include 'includes/config.php';

$rstat = 0;
$rquest = $_POST['faq_question'];
$rans = $_POST['faq_answer'];

$sql = "INSERT INTO questions (status, question, answer) VALUES (:rstat, :rquest, :rans)";
$query = $pdo->prepare($sql);
$query->execute(['rstat' => $rstat, 'rquest' => $rquest, 'rans' => $rans]);

header('Location: /zooov/_admin/index.php?item=faq&action=add');
?>