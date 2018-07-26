<?php

$goal = $_GET['changeSaverGoal'];

$id = $_GET['saverID'];

$percentage = $_GET['changeGoalPercent'];

//var_dump($goal);
//var_dump($id);
//var_dump($percentage);

require_once('dbconfig.php');

$sql = "UPDATE savings_tracker SET st_goal = " . $goal . ", st_percent = " . $percentage . " WHERE st_id = " . $id;

$conn->query($sql);

$conn->close();

//var_dump($total);

header('location:savingsTracker.php');


?>