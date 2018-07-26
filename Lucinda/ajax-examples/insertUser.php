<?php

//connect to DB
require_once('../dbconfig.php'); //go out of ajax-examples folder and find that file

$now = date('r');

$sql = "INSERT INTO users (firstname,lastname,email,date_registered) VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$now')";

$conn->query($sql);

$conn->close();

echo 'User Inserted';

?>