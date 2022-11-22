<?php
include 'includes/config.php';
session_start();


$rid = $_SESSION['m_upd-id'];
$rh1 = $_POST['m_h1'];
$rh2 = $_POST['m_h2'];
$rphone = $_POST['m_phone'];
$rt = $_POST['m_text'];
$rlogo = $_FILES['m_logo']['name'];

if($_FILES['m_logo']['name'] == ""){
    $rlogo = "no_image.png";
} 


$sql = "UPDATE main SET head_text_1=:rh1,head_text_2=:rh2,text=:rt,phone=:rphone,logo=:rlogo WHERE id=:id";
$query = $pdo->prepare($sql);
$query->execute(['rh1' => $rh1, 'rh2' => $rh2, 'rt' => $rt, 'rphone' => $rphone, 'rlogo' => $rlogo, 'id' => $rid]);

header("Location: /zooov/_admin/index.php?item=main&action=upd&id=".$rid);
?>