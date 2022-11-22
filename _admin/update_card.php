<?php
include 'includes/config.php';
session_start();


$rid = $_SESSION['upd-id'];
$rname = $_POST['ration-name'];
$rinclude = $_POST['ration-include'];
$rdesc = $_POST['ration-description'];
$rw = $_POST['ration-weight'];
$rpic = $_FILES['ration-picture']['name'];
$rpicg = $_FILES['ration-picture-gost']['name'];

if($_FILES['ration-picture']['name'] == ""){
    $rpic = "no_image.png";
} 
if($_FILES['ration-picture-gost']['name'] == ""){
    $rpicg = "no_image.png";
}

$sql = "UPDATE ration_cards SET title=:rname,comp=:rinclude,description=:rdesc,weight=:rw,picture=:rpic,gost_pic=:rpicg WHERE id=:id";
$query = $pdo->prepare($sql);
$query->execute(['rname' => $rname, 'rinclude' => $rinclude, 'rdesc' => $rdesc, 'rw' => $rw, 'rpic' => $rpic, 'rpicg' => $rpicg, 'id' => $rid]);

header("Location: /zooov/_admin/index.php?item=product&action=upd&id=".$rid);
?>