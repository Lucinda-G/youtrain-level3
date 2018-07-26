<?php

//the data in the '' are from the 'name=""'
$title = $_GET['title'];
$description = $_GET['description'];
$category = $_GET['category'];

//echo $_GET['title'];
//echo $_GET['description'];
//echo $_GET['category'];

//connect to DB
require_once('dbconfig.php');

//prepare a SQL query
$sql = "INSERT INTO projects (name,description,cat_id) VALUES('" . $title . "','" . $description . "'," . $category . ")"; //you MUST include single quotes around VARCHAR and TEXT

//run query
$conn->query($sql);

//close the connection
$conn->close();


//redirect to a list of projects
header('location:viewProject.php');

?>