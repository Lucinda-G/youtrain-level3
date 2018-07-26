<?php

require_once('../dbconfig.php'); //get out of 'ajax-examples' and find dbconfig
$sql = "SELECT * FROM users ORDER BY lastname ASC";
$result = $conn->query($sql);
$rows = array();//create an empty array
while($row = $result->fetch_assoc()){
    $rows[] = $row; //pushing into the array
}

echo json_encode($rows);
    
    
    
$conn->close();



?>