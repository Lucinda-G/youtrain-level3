<?php

//connect to DB
require_once('dbconfig.php');

//insert user into DB
$networkName = $_GET['networkName'];
$notes = $_GET['notes'];
$operatingSystem = $_GET['operatingSystem'];
$otherSoftware = $_GET['otherSoftware'];
$allocatedTo = $_GET['allocatedTo'];
$ipAddress = $_GET['ipAddress'];
$allocation = '1'; //allocated


//prepare a parameterised statement - this is a guard against SQL injection and problems with special characters in data submitted from the form
if(!$stmt = $conn->prepare("INSERT INTO property_register (network_name,notes,operating_system,other_software,allocated_to,ip_address,allocation) VALUES(?,?,?,?,?,?,?)"))
    echo "Prepare Error: ($conn->errno) $conn->error";

//bind data from form to the statement
if ( !$stmt->bind_param("sssssss", $networkName,$notes,$operatingSystem,$otherSoftware,$allocatedTo,$ipAddress,$allocation))
    echo "Binding Parameter Error: ($conn->errno) $conn->error";

//execute the prepared statement
if ( !$stmt->execute() )
    echo "Execute Error: ($stmt->errno) $stmt->error";

$conn->close();

header('location:propertyRegister.php');

?>