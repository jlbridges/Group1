<?php 
#Access the server
$server="localhost";
$group1Username = "cti110";
$group1Password="wtcc";
$dbName="hr";

$conn=mysql_connect($server, $group1Username, $group1Password, $dbName);
	
	if(!$conn)
 { 
die("ERROR: Cannot connect to database $dbName on server $server using username $group1Username (".mysqli_connect_errno(). ", ".mysqli_connect_error().")");
 } 
?>
