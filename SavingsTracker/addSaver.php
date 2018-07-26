<?php

//echo $_GET['email'];

//connect to DB
require_once('dbconfig.php');

//insert user into DB


$sql = "INSERT INTO savings_tracker (st_name, st_notes, st_goal, st_total) VALUES('$_GET[newSaverName]','$_GET[newSaverNotes]','$_GET[newSaverGoal]','$_GET[newSaverTotal]')";

//echo $_GET['newSaverTotal'];

$conn->query($sql);

$conn->close();


header('location:savingsTracker.php');


?>