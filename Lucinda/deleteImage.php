<?php
    
require_once('dbconfig.php');

$image_id = $_GET['imageID']; //gets the number in the URL even though you used POST before. And 'imageID' is 'deleteImage.php?imageID=' from that.

//now need to delete the chosen user
$sql = "DELETE FROM images WHERE image_id = " . $image_id; //first id is the name in table, second id is the chosen one

unlink($_GET['filePath']);

$conn->query($sql);

$conn->close();

//redirect user back to users.php
header('location:images.php');

?>