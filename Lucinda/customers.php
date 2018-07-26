<?php

//connect to database - this requires that we create an instance of the mysqli class. The mysqli class constructor requires arguments. (db server, username, password, db name)
$conn = new mysqli('localhost', 'classicmodels', 'password', 'classicmodels');

//always important to check for errors
if($conn->connect_errno){
    echo 'Connection error: ' . $conn->connect_errno;
    exit();
}

//select all the customers from the db
$sql = "SELECT customerNumber, customerName FROM customers";

//next line tries to create a variable in ($result) but if it is false, we have an error which we must deal with - note the exclamation mark which is is checking for false.
if(!$result = $conn->query($sql)){
    echo $conn->error;
}

//check if it works
//var_dump($result->fetch_array()); //You would never leave this in your code - it's a security issue. (just for development)

//create an array for the results - this is the php way of creating an array
$customers = array();
//loop through the results and push each result into the $customer array - repetition
while($row = $result->fetch_array()){
    array_push($customers, $row);
}

echo json_encode($customers);



?>





