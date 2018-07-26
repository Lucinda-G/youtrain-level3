<?php

$id = $_GET['saverID'];


require_once('dbconfig.php');

$sql = "DELETE FROM savings_tracker WHERE st_id = " . $id;

$conn->query($sql);

$conn->close();

//var_dump($total);

header('location:savingsTracker.php');


?>