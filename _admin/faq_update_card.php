<?php
include 'includes/config.php';
session_start();


$faq_rid = $_SESSION['faq_upd-id'];
$rquest = $_POST['faq_question'];
$rans = $_POST['faq_answer'];


$sql = "UPDATE questions SET question=:rquest, answer=:rans WHERE id=:id";
$query = $pdo->prepare($sql);
$query->execute(['rquest' => $rquest, 'rans' => $rans, 'id' => $faq_rid]);

header("Location: /zooov/_admin/index.php?item=faq&action=upd&id=".$faq_rid);
?>