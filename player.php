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
     <th>PLAYER ID</th>
	 <th>NAME</th>
	 <th>PREVIOUS CLUB</th>
	 <th>BEST PERFORMANCE</th>
	 <th>EDUCATION</th>
	 <th>MEMBERSHIP</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","website");
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
$sql = "SELECT Player_Id,First_name,Club,o_p,Degree,Membership from player as p, previous_club as pr,best_performance as bp,educational_qualification as eq where p.Player_Id=pr.Player_Id and p.Player_Id=bp.Player_id and p.Player_Id=eq.player_id";
$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
echo "<tr><td>". $row['Player_Id']."</td><td>". $row['First_name']."</td><td>". $row['Club']."</td><td>". $row['o_p']."</td><td>". $row['Degree']."</td><td>". $row['Membership']."</td></tr>";
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