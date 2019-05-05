<!DOCTYPE html>
<html>
<head>
<title> fixture table </title>
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
     <th>CLUB NAME</th>
	 <th>ESTABLISH</th>
	 <th>CITY</th>
	 <th>PRESIDENT</th>
	 <th>CONTACT</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","website");
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
$sql = "SELECT club_name,Date_of_establishment,city,name_of_president,phone_number from club";
$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
echo "<tr><td>". $row['club_name']."</td><td>". $row['Date_of_establishment']."</td><td>". $row['city']."</td><td>". $row['name_of_president']."</td><td>". $row['phone_number']."</td></tr>";
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