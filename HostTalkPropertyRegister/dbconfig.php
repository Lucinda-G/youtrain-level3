<?php

//connect to the database
//'localhost', 'super-user-name', 'password', 'data-base-name'
$conn = new mysqli('localhost','property-register','password','property-register');

//check is connection to DB was successful
if($conn->connect_errno){
    echo $conn->connect_errno; //num if broken
    echo $conn->connect_error;
    exit();

}

?>