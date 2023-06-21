<?php

$hostname     = "localhost"; // enter your hostname
$username     = "id20766175_hmbox";  // enter your table username
$password     = "Hmbox@123";   // enter your password
$databasename = "id20766175_hmbox";  // enter your database
// Create connection 
$conn = new mysqli($hostname, $username, $password,$databasename);
 // Check connection 
if ($conn->connect_error) { 
die("Unable to Connect database: " . $conn->connect_error);
 }
?>