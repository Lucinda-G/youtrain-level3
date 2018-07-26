<?php

//echo $_GET['text'];
$total = $_GET['saverTotalSave'];

$id = $_GET['saverID'];

$percentage = $_GET['saverPercent'];



require_once('dbconfig.php');

$sql = "UPDATE savings_tracker SET st_total = " . $total .", st_percent = " . $percentage . " WHERE st_id = " . $id;

$conn->query($sql);

$conn->close();

//var_dump($total);

header('location:savingsTracker.php');


?>