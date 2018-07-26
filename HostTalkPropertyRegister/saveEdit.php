<?php

//store data sent from form (updateMessage.php) in variables for use in SQL statement
$id = $_GET['rowID']; //from the hidden input field
$networkName = $_GET['networkName'];
$notes = $_GET['notes'];
$operatingSystem = $_GET['operatingSystem'];
$otherSoftware = $_GET['otherSoftware'];
$allocatedTo = $_GET['allocatedTo'];
$ipAddress = $_GET['ipAddress'];

require_once('dbconfig.php');
$sql = "UPDATE property_register SET network_name = '" . $networkName . "', notes = '" . $notes . "', operating_system = '" . $operatingSystem . "', other_software = '" . $otherSoftware . "', allocated_to = '" . $allocatedTo . "', ip_address = '" . $ipAddress ."' WHERE id = " . $id; //make sure there's the single quotes as status is a varchar

$conn->query($sql);
$conn->close();

header('location:propertyRegister.php');

?> 