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
     <th>MATCH ID</th>
	 <th>MATCH DATE</th>
	 <th>TEAM BATTING FIRST</th>
	 <th>TEAM BOWLING FIRST</th>
	 <th>VENUE</th>
	 <th>MAN OF THE MATCH</th>
	
</tr>
<?php
$conn=mysqli_connect("localhost","root","","website");
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
$sql = "SELECT Match_id,match_date,team_bat_first,team_bowl_first,venue,man_of_the_match from matches";
$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
echo "<tr><td>". $row['Match_id']."</td><td>". $row['match_date']."</td><td>". $row['team_bat_first']."</td><td>". $row['team_bowl_first']."</td><td>". $row['venue']."</td><td>". $row['man_of_the_match']."</td></tr>";
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