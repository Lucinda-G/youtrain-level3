<?php

$name = $_GET['renameSaver'];

$notes = $_GET['renameNotesSaver'];

$id = $_GET['saverID'];



require_once('dbconfig.php');


//SQL Injection and allows punctuation
if ( !$stmt = $conn->prepare("UPDATE savings_tracker  SET st_name = ?, st_notes= ? WHERE st_id = ?") ) 
    echo "Prepare Error: ($conn->errno) $conn->error";

if ( !$stmt->bind_param("ssi", $name,$notes,$id) )
    echo "Binding Parameter Error: ($conn->errno) $conn->error";

if ( !$stmt->execute() ) 
echo "Execute Error: ($stmt->errno)  $stmt->error";



//$sql = "UPDATE savings_tracker SET st_name = '" . $name . "', st_notes ='" . $notes . "' WHERE st_id = " . $id;
//
//$conn->query($sql);

$conn->close();

//var_dump($sql);


header('location:savingsTracker.php');


?>