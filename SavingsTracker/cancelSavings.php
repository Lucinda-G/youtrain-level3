<?php

//echo $_GET['email'];

//connect to DB
require_once('dbconfig.php');

//insert user into DB


$sql = "SELECT st_total FROM savings_tracker";

//echo $sql; - used to test the SQL statement

$conn->query($sql);

$conn->close();

header('location:savingsTracker.php');


?>