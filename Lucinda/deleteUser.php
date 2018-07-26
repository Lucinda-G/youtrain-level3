<?php
    
require_once('dbconfig.php');

$id = $_GET['userID']; //gets the number in the URL

//now need to delete the chosen user
$sql = "DELETE FROM users WHERE id = " . $id; //first 'id' is the name in table, '$id' is the chosen one

$conn->query($sql);

$conn->close();

//redirect user back to users.php
header('location:users.php');

?>