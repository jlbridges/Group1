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
filename: group1-hr-html.html
Blackboard Username: jlbridges1
Class Section: 0004
Purpose: php file that will create emp search table from the hr database
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
$empId=$_POST['id'];

$empQuery ="SELECT lastName FROM employees";
$result= mysqli_query($conn, $empQuerry);
$check= mysqli_num_rows($result);

$result;

if (!$result) { 
die("Could not successfully run query ($empQuery) from $db: " . mysqli_error($connect)); 
} 

while ($row = mysqli_fetch_assoc($result))
     { 
       print ("<tr><td>".$row['firstName']. "</td><td>".$row['lastName']."</td></tr>"); 
     } 
    print("</table");
 }


?>
</div>
</body>
</html>