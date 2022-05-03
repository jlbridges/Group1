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
<!DOCTYPE HTML>
<html lang="en">
<head>
<!--Name: Jacob Bridges
filename: group1-hr-job-title.html
Blackboard Username: jlbridges1
Class Section: 0004
Purpose: php file that will return job title table list and average salary 
 -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>HR Portal</title>
<link href="../css/group1-hr-style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<p>Test</p>
<div class="container">
<?php 
#Get last name or id
$lastName=$_POST['name'];
$empId=$POST['id'];
$empQuery = "SELECT * FROM employees;";
$result= mysqli_query($conn, $sql);
$check= mysqli_num_rows($result);

if (mysqli_num_rows($result) == 0)
 { 
    print("No records found with query $empQuery");
 } 
else

    print("<h1>LIST OF EMPLOYEES</h1>"); 
    print("<table border = \"1\">"); 
    print("<tr><th>First Name</th><th>Last Name</th></tr>");


?>
</div>
</body>
</html>