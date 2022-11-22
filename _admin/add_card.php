<?php
include 'includes/config.php';

$rstat = 0;
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

$sql = "INSERT INTO ration_cards (status, title, comp, description, weight, picture, gost_pic) VALUES (:rstat, :rname, :rinclude, :rdesc, :rw, :rpic, :rpicg)";
$query = $pdo->prepare($sql);
$query->execute(['rstat' => $rstat, 'rname' => $rname, 'rinclude' => $rinclude, 'rdesc' => $rdesc, 'rw' => $rw, 'rpic' => $rpic, 'rpicg' => $rpicg]);

header('Location: /zooov/_admin/index.php?item=product&action=add');
?>