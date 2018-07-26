<?php

//store data sent from form (updateMessage.php) in variables for use in SQL statement
$email = $_GET['email'];
$message = $_GET['message'];
$status = $_GET['status']; //reference to form variable
$id = $_GET['messageID']; //from the hidden input field

require_once('dbconfig.php');
$sql = "UPDATE messages SET email = '" . $email . "', message = '" . $message . "', status = '" . $status ."' WHERE id = " . $id; //make sure there's the single quotes as status is a varchar

$conn->query($sql);
$conn->close();

header('location:displayMessage.php');

?> 