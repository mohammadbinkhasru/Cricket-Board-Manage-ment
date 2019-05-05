<!DOCTYPE html>
<html>
<head>
<titel> Events Table </title>
<style>
table{
	border-collapse: collapse;
	width:100%;
	color: red;
	font-family:monospace;
	font-size: 25px;
	text-align: left;
}
th{
	background-color: orange;
	color: white;
}
tr:nth-child(even){background-color:#f2f2f2}
</style>
</head>
<body>
<table>
<tr>
    <th>Event ID</th>
	<th>Event Name</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","website");
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
$sql = "SELECT Event_id, event_name from events";
$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
echo "<tr><td>". $row['Event_id']."</td><td>". $row['event_name']."</td></tr>";
}
echo "</table>";
}
else{
echo"0 result";
}
$conn->close();
?>
</table>
</body>
</html>