<?php

// Params to connect to a database
$dbHost = "localhost";
$dbUser = "raw";
$dbPass = "";
$dbName = "phptutorial";

//Connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

//check if connection failed
if(!$conn) {
  die("Database connection failed!");
}

?>