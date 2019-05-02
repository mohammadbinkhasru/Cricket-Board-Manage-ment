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
    <th>USER NAME</th>
	<th>EMAIL</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","website");
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
$sql = "SELECT username, email from users";
$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
echo "<tr><td>". $row['username']."</td><td>". $row['email']."</td></tr>";
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